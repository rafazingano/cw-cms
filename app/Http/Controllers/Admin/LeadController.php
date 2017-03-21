<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lead;
use App\LeadRule;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['leads'] = Lead::all();
        return view('admin.porto.leads.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.porto.leads.create');
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
            'email' => 'required'
        ]);
        try {
            $id = $this->save($request);
            return redirect()->route('admin.leads.edit', $id)->with('message', 'lead.create_success');
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
        $data['lead'] = Lead::find($id);
        return view('admin.porto.leads.edit', $data);
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
            'email' => 'required'
        ]);

        try {
            $this->save($request, $id);
            return redirect()->route('admin.leads.edit', $id)->with('message', 'lead.update_success');
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
            Lead::destroy($id);
            return redirect()->route('admin.leads.index')->with('message', 'lead.destroy_success');
        } catch (Exception $e) {
            return back()->withInput()->with('message', $e->getMessage());
        }
    }
    
    
    
    private function save($request, $id = null) {
        $attributes = $request->all();
        try {
            if ($id) {
                $lead = Lead::findOrFail($id);
                $lead->update($attributes);
            } else {
                $lead = Lead::Create($attributes);
            }
        } catch (Exception $e) {
            return false;
        }
        return $lead->id;
    }
}
