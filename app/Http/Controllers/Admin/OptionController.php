<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Option;
use App\Field;

class OptionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data['options'] = Option::all();
        return view('admin.porto.options.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $data['types'] = Option::pluck('label', 'id');
        $data['fields'] = Field::pluck('title', 'id');
        return view('admin.porto.options.create', $data);
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
            return redirect()->route('admin.options.edit', $id)->with('message', 'options.create_success');
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
        $data['option'] = Option::find($id);
        return view('admin.porto.options.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $data['option'] = Option::find($id);
        $data['types'] = Option::pluck('label', 'id');
        $data['fields'] = Field::pluck('title', 'id');
        return view('admin.porto.options.edit', $data);
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
            return redirect()->route('admin.options.edit', $id)->with('message', 'options.update_success');
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
            Option::destroy($id);
            return redirect()->route('admin.options.index')->with('message', 'options.destroy_success');
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
            'name' => 'required',
            'label' => 'required',
            'description' => 'required',
            'field_id' => 'required'
        ]);
        try {
            if ($id) {
                $option = Option::find($id);
                $o = $request->all();
                $option->update($o);
            } else {
                $option = Option::create($request->all());
            }
        } catch (Exception $e) {
            return false;
        }
        return $option->id;
    }

}
