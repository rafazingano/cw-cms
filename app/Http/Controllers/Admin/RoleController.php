<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin-role-show');
        $data['roles'] = Role::all();
        return view('admin.porto.roles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin-role-create');
        $permissions = Permission::all();
        $data = null;
        foreach ($permissions as $permission){
            $d = explode('-', $permission->slug);
            $data['permissions'][$d[0]][$d[1]][$permission->id] = $permission->title;
        }
        return view('admin.porto.roles.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin-role-create');
        $input = $request->input('role');
        $permissions = $request->input('permissions');
        if (Role::where(['slug' => $input['slug']])->exists()) {
            return back()->withInput()->with('message', 'Esse registro ja existe');
        }
        $input['slug'] = str_slug($input['slug'], '-');
        Role::Create($input)->permissions()->sync($permissions);
        return redirect()->route('admin.roles.index')->with('message', 'Salvo com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('admin-role-show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('admin-role-edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('admin-role-edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin-role-destroy');
    }
}
