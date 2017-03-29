<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Site;
use App\Type;

class PostController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug = '/') {
        $type = Type::where(['slug' => $slug])->first();
        if (!$type) {
            return $this->show($slug);
        }
        $posts = Post::where(['type_id' => $type->id])->paginate(15);
        foreach($posts as $post) {
            $opt = array();
            foreach ($post->options as $o_v) {
                $opt[$o_v['name']] = $o_v['pivot']['value'];
            }
             $post->options = (object) $opt;
        }
        $site_theme = Site::first()->theme->slug;
        $theme = isset($site_theme) ? $site_theme : 'default';
        $array_layouts = [$type->layout, 'default'];
        $layout = $this->validateView($theme, 'layouts', $array_layouts);
        $array_views = [$type->slug, 'posts'];
        $view = $this->validateView($theme, 'types', $array_views);
        return view($view, compact('posts', 'type', 'layout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug = '/') {
        /* Verifica se o site tem um tema definido, senão utiliza o default */
        $site_theme = Site::first()->theme->slug;
        $theme = isset($site_theme) ? $site_theme : 'default';
        /* Busca o post, caso contrario apresenta erro 404 */
        $post = Post::where(['status' => 1, 'slug' => $slug])->first();
        if (!$post && '/' == $slug) {
            $view = $this->validateView($theme, null, ['home']);
            if ($view) {
                return view('site.' . $theme . '.home', compact('layout'));
            }
        }
        abort_if(!$post, 404);
        /*Busca posts relacionados*/
        //$posts = Post::where(['type_id' => $post['type_id']])->get();     
        $posts = Post::all();   
        foreach($posts as $pt) {
            $opts = array();
            foreach ($pt->options as $o_v) {
                $opts[$o_v['name']] = $o_v['pivot']['value'];
            }
             $pt->options = (object) $opts;
        }
        /* Monta as opções disponiveis para o post */
        $opt = array();
        foreach ($post->options as $o_v) {
            $opt[$o_v['name']] = $o_v['pivot']['value'];
        }
        $options = (object) $opt;
        /* Busca o layout */
        $array_layouts = [$post->layout, $post->type->layout, 'default'];
        $layout = $this->validateView($theme, 'layouts', $array_layouts);
        if (!$layout) {
            abort_if(!$post, 404);
        }
        /* Busca a view */
        $array_views = [$post->slug, $post->type->slug . '-' . $post->slug, $post->type->slug, 'post'];
        $view = $this->validateView($theme, 'posts', $array_views);
        if (!$view) {
            abort_if(!$post, 404);
        }
        return view($view, compact('posts', 'post', 'options', 'layout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    private function validateView($dir_theme, $dir_views, $views) {
        $base_v = 'resources/views/site/' . $dir_theme;
        $base_v .= isset($dir_views) ? '/' . $dir_views . '/' : '/';
        $dir_theme_view = base_path($base_v);
        foreach ($views as $v) {
            if ($v == '/') {
                $v = 'home';
            }
            if (is_file($dir_theme_view . $v . '.blade.php')) {
                $v_base = isset($dir_views) ? '.' . $dir_views . '.' : '.';
                return 'site.' . $dir_theme . $v_base . $v;
            }
        }
        return false;
    }

}
