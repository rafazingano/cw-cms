<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Type;
use App\Option;

class TypeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data['types'] = Type::all();
        return view('admin.porto.types.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $data['options'] = $this->options(Option::all());
        //echo '<pre>'; print_r($data['options']); die();
        return view('admin.porto.types.create', $data);
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
            return redirect()->route('admin.types.edit', $id)->with('message', 'type.create_success');
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
        $data['type'] = Type::find($id);
        return view('admin.porto.types.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $data['type'] = Type::find($id);
        $data['options'] = $this->options(Option::all(), $data['type']);
        return view('admin.porto.types.edit', $data);
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
            return redirect()->route('admin.types.edit', $id)->with('message', 'type.update_success');
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
            Type::destroy($id);
            return redirect()->route('admin.types.index')->with('message', 'type.destroy_success');
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
            'icon' => 'required',
            'description' => 'required'
        ]);
        $attributes = $request->all();
        $options = [];
        $opt = isset($attributes['options'])? $attributes['options'] : [];
        foreach($opt as $k => $v){
            if(isset($v['checked'])){
                unset($v['checked']);
                $options[$k] = $v;
            }
        }
        //echo '<pre>'; print_r($options); die();
        try {
            if ($id) {
                $type = Type::findOrFail($id);
                $type->update($attributes);
                $type->options()->sync($options);
            } else {
                $type = Type::Create($attributes);
                $type->options()->sync($options);
            }
        } catch (Exception $e) {
            return false;
        }
        return $type->id;
    }
    
    
    private function options($options, $type = null) {
        foreach($options as $option){
            if(isset($type)){
                $option->option_type = ($type->options->contains($option->id))? 'checked' : null;
                $option->value = isset($type->options()->where('option_id', $option->id)->first()->pivot->value) ? $type->options()->where('option_id', $option->id)->first()->pivot->value : '';
            }else{
                $option->option_type = null;
                $option->value = null;
            }    
        }          
        return $options;
    }

}
