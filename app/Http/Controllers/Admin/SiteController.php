<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Site;
use App\Theme;

class SiteController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data['sites'] = Site::all();
        return view('admin.porto.sites.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $data['themes'] = Theme::pluck('title', 'id');
        return view('admin.porto.sites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required|unique:sites'
        ]);
        try {
            $id = $this->save($request);
            return redirect()->route('admin.sites.edit', $id)->with('message', 'site.create_success');
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
        $data['site'] = Site::find($id);
        return view('admin.porto.sites.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $data['site'] = Site::find($id);
        $data['themes'] = Theme::pluck('title', 'id');
        return view('admin.porto.sites.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        /*
          $this->validate($request, [
          'title' => 'required'
          ]);
         */
        try {
            $this->save($request, $id);
            return back()->withInput()->with('message', 'site.update_success');
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
            Site::destroy($id);
            return redirect()->route('admin.sites.index')->with('message', 'site.destroy_success');
        } catch (Exception $e) {
            return back()->withInput()->with('message', $e->getMessage());
        }
    }

    /**
     * 
     * 
     * @param site $request
     * @param site $id
     * @return string
     */
    private function save($request, $id = null) {
        $attributes = $request->all();
        $options = isset($attributes['options']) ? $attributes['options'] : [];
        try {
            if ($id) {
                $site = Site::findOrFail($id);
                $site->update($attributes);
            } else {
                $site = Site::Create($attributes);
            }
            if(isset($attributes['theme_id']) && !empty($attributes['theme_id'])){
                Theme::init($attributes['theme_id']);
            }
        } catch (Exception $e) {
            return false;
        }
        return $site->id;
    }

}
