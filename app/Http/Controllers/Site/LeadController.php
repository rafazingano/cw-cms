<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Lead;
use App\Mail\Contact;

class LeadController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
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
        try {
            $this->save($request);
            return back()->withInput()->with('message', 'lead.create_success');
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

    private function save($request, $id = null) {
        $lead = $request->only(['name', 'email', 'phone', 'content', 'lead_rule']);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'content' => 'required',
        ]);
        foreach ($request->except(['_token', 'name', 'email', 'phone', 'content']) as $k => $v) {
            $lead['content'] .=  '<br>' . $k . ' - ' . $v;
        }
        try {
            if ($id) {
                $lead = Lead::findOrFail($id);
                $lead->update($lead);
            } else {
                $lead = Lead::Create($lead);
            }            
        } catch (Exception $e) {
            return false;
        }
        try {
            Mail::send(new Contact($request, $lead));
        } catch (Exception $e) {
            return false;
        }
        return $lead->id;
    }

}
