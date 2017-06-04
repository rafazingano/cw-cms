<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Theme;

class ThemeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data['themes'] = Theme::all();
        return view('admin.porto.themes.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.porto.themes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        try {
            $this->createStructure($request->all()['slug']);
            $id = $this->save($request);
            return redirect()->route('admin.themes.edit', $id)->with('message', 'theme.create_success');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $data['theme'] = Theme::find($id);
        return view('admin.porto.themes.edit', $data);
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
            //$this->createStructure($attributes['slug']);
            $this->save($request, $id);
            return redirect()->route('admin.themes.edit', $id)->with('message', 'theme.create_success');
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
    public function destroy($id) {
        try {
            Theme::destroy($id);
            return redirect()->route('admin.themes.index')->with('message', 'theme.destroy_success');
        } catch (Exception $e) {
            return back()->withInput()->with('message', $e->getMessage());
        }
    }

    private function createStructure($slug) {
        /* Resource's Path's */
        if (!is_dir(resource_path('views/site'))) {
            mkdir(resource_path('views/site'), 0755);
        }
        if (!is_dir(resource_path('views/site/' . $slug))) {
            mkdir(resource_path('views/site/' . $slug), 0755);
            mkdir(resource_path('views/site/' . $slug . '/layouts'), 0755);
            $this->createFile(resource_path('views/site/' . $slug . '/layouts'), 'default.blade.php', '@yield("content")');
            mkdir(resource_path('views/site/' . $slug . '/partials'), 0755);
            mkdir(resource_path('views/site/' . $slug . '/posts'), 0755);
            $this->createFile(resource_path('views/site/' . $slug . '/posts'), 'post.blade.php', 'post');
            mkdir(resource_path('views/site/' . $slug . '/types'), 0755);
            $this->createFile(resource_path('views/site/' . $slug . '/types'), 'posts.blade.php', 'posts)');
            mkdir(resource_path('views/site/' . $slug . '/assets'), 0755);
        }
        /* Public's Path's */
        if (!is_dir(public_path('assets/site'))) {
            mkdir(public_path('assets/site'), 0755);
        }
        if (!is_dir(public_path('assets/site/' . $slug))) {
            mkdir(public_path('assets/site/' . $slug), 0755);
        }
        return true;
    }

    private function createFile($path, $file = 'file.txt', $content = 'ok') {
        $fp = fopen($path . '/' . $file, "a");
        fwrite($fp, $content);
        fclose($fp);
        return true;
    }

    private function save($request, $id = null) {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'status' => 'required'
        ]);
        try {
            if ($id) {
                $theme = Theme::findOrFail($id);
                $theme->update($request->all());
            } else {
                $theme = Theme::Create($request->all());
            }
        } catch (Exception $e) {
            return false;
        }
        return $theme->id;
    }
    
    

}
