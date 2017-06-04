<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Type;
use App\Gallery;
use Illuminate\Validation\Rule;
use App\Site;

class PostController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type_id) {
        $data['type'] = Type::find($type_id);
        return view('admin.porto.posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type_id) {
        $data['type'] = Type::find($type_id);
        $data['options'] = $this->options($data['type']->options, $data['type']);
        $theme = Site::first()->theme;
        //dd($theme);
        $data['type_views'] = $this->listViewsType($theme, $data['type']);
        return view('admin.porto.posts.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        try {
            $id = $this->save($request);
            return redirect()->route('admin.posts.edit', $id)->with('message', 'post.create_success');
        } catch (Exception $e) {
            return back()->withInput()->with('message', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $data['post'] = Post::find($id);
        return view('admin.porto.posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $data['post'] = Post::find($id);
        $data['type'] = Type::find($data['post']->type_id);
        $data['options'] = $this->options($data['type']->options, $data['type'], $data['post']);
        //echo '<pre>'; print_r($data['options']); die();
        return view('admin.porto.posts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        try {
            $this->save($request, $id);
            return redirect()->route('admin.posts.edit', $id)->with('message', 'post.update_success');
        } catch (Exception $e) {
            return back()->withInput()->with('message', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $type_id) {
        try {
            Post::destroy($id);
            return redirect()->route('admin.posts.index', $type_id)->with('message', 'post.destroy_success');
        } catch (Exception $e) {
            return back()->withInput()->with('message', $e->getMessage());
        }
    }

    /**
     * 
     * 
     * @param type $request
     * @param type $id
     * @return string
     */
    private function save($request, $id = null) {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'order' => 'required',
            'status' => 'required',
        ]);
        $attributes = $request->all();
        $options = isset($attributes['options']) ? $attributes['options'] : [];
        //echo '<pre>'; print_r($options); die();
        foreach ($options as $k => $v) {
            if (empty($v['value'])) {
                $options[$k]['value'] = '';
            }
        }
        //echo '<pre>'; print_r($options); die();
        $files = $request->file('options_file');
        try {
            if ($id) {
                $post = Post::findOrFail($id);
                $options = $this->optionsFiles($files, $options, 'uploads/' . $post->type->slug . '/' . $post->id);
                $post->update($attributes);
                $post->options()->sync($options);
            } else {
                $post = Post::Create($attributes);
                $options = $this->optionsFiles($files, $options, 'uploads/' . $post->type->slug . '/' . $post->id);
                $post->options()->sync($options);
            }
        } catch (Exception $e) {
            return false;
        }
        return $post->id;
    }

    private function optionsFiles($files, $options, $destinationPath = 'uploads') {
        if ($files) {
            foreach ($files as $f_k => $file) {
                //echo '<pre>' . count($file) . ' - '; print_r($file); die(); 
                if (is_array($file)) {
                    $options[$f_k]['value'] = $this->saveGallery($file, $destinationPath);
                } else {
                    $options[$f_k]['value'] = $this->uploadFile($file, $destinationPath);
                }
            }
        }
        return $options;
    }

    private function saveGallery($files, $destinationPath = 'uploads/galleries', $post = null) {
        //$gallery = Gallery::firstOrCreate([]);
        foreach ($files as $file) {
            $f[] = $this->uploadFile($file, $destinationPath);
        }
        return json_encode($f);
        //return true;
    }

    private function options($options, $type, $post = null) {
        $o = null;
        $r = null;
        $c = 0;
        foreach ($options as $option) {
            $o['label'] = trans($option->label);
            $o['type'] = $option->field->title;
            switch ($o['type']) {
                case 'select':
                    $o['options'] = isset($type->options()->where('option_id', $option->id)->first()->pivot->value) ? $type->options()->where('option_id', $option->id)->first()->pivot->value : '';
                    $o['name'] = 'options[' . $option->id . '][value]';
                    unset($o['multiple']);
                    break;
                case 'file':
                    $o['name'] = 'options_file[' . $option->id . ']';
                    break;
                case 'gallery':
                    $o['name'] = 'options_file[' . $option->id . '][]';
                    $o['type'] = 'file';
                    $o['multiple'] = 'multiple';
                    break;
                default:
                    $o['name'] = 'options[' . $option->id . '][value]';
            }
            if (isset($post)) {
                $o['value'] = isset($post->options()->where('option_id', $option->id)->first()->pivot->value) ? $post->options()->where('option_id', $option->id)->first()->pivot->value : '';
            } else {
                $o['value'] = null;
            }
            //$r[] = (object) $o;
            $r[] = $o;
            $c++;
        }
        //return (object) $r;
        return $r;
    }

    private function uploadFile($file, $destinationPath = 'uploads') {
        if ($file->isValid()) {
            $destinationPublic = public_path() . '/' . $destinationPath;
            $extension = $file->getClientOriginalExtension();
            $fileName = md5(uniqid(rand(), true)) . '.' . $extension;
            if (!is_dir($destinationPublic)) {
                mkdir($destinationPublic, 0777);
            }
            $file->move($destinationPublic, $fileName);
            return $destinationPath . '/' . $fileName;
        }
        return false;
    }

    private function listViewsType($theme, $type, $R = NULL) {
        if (is_dir(resource_path('views/site/' . $theme->slug . '/' . $type->view))) {
            $resource_path = dir(resource_path('views/site/' . $theme->slug . '/' . $type->view));
            while ($file = $resource_path->read()) {
                if (strpos($file, '.blade.php')) {
                    $file = str_replace('.blade.php', '', $file);
                    $R[$type->view . '/' . $file] = ucfirst(str_replace([$type->view . '-', '-'], ['', ' '], $file));
                }
            }
            $resource_path->close();
        }
        $resource_path = dir(resource_path('views/site/' . $theme->slug));
        while ($file = $resource_path->read()) {
            if (strpos($file, '.blade.php') && 'post' == explode('-', $file)[0]) {
                $file = str_replace('.blade.php', '', $file);
                $R[$file] = ucfirst(str_replace('-', ' ', $file));
            }
        }
        $resource_path->close();
        return $R;
    }

}
