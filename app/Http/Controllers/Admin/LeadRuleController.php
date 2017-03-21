<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LeadRule;
use App\User;

class LeadRuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['leadrules'] = LeadRule::all();
        return view('admin.porto.leadrules.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['users'] = User::pluck('email', 'id');
        return view('admin.porto.leadrules.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'slug' => 'required'
        ]);
        try {
            $id = $this->save($request);
            return redirect()->route('admin.leadrules.edit', $id)->with('message', 'leadrule.create_success');
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['leadrule'] = LeadRule::find($id);
        $data['users'] = User::pluck('email', 'id');
        return view('admin.porto.leadrules.edit', $data);
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
        $this->validate($request, [
            'slug' => 'required'
        ]);

        try {
            $this->save($request, $id);
            return redirect()->route('admin.leadrules.edit', $id)->with('message', 'leadrule.update_success');
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
    public function destroy($id)
    {
        try {
            LeadRule::destroy($id);
            return redirect()->route('admin.leadrules.index')->with('message', 'leadrule.destroy_success');
        } catch (Exception $e) {
            return back()->withInput()->with('message', $e->getMessage());
        }
    }

    private function save($request, $id = null) {
        $attributes = $request->all();
        $users = isset($attributes['users']) ? $attributes['users'] : [];
        try {
            if ($id) {
                $leadrule = LeadRule::findOrFail($id);
                $leadrule->update($attributes);
                $leadrule->users()->sync($users);
            } else {
                $leadrule = LeadRule::Create($attributes);
                $leadrule->users()->sync($users);
            }
        } catch (Exception $e) {
            return false;
        }
        return $leadrule->id;
    }
}
