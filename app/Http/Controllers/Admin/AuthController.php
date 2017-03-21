<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AuthController extends Controller {

    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request) {
        $this->validate($request, [
            'email' => 'required|exists:users',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'active' => 1], $request->input('remember'))) {
            return redirect()->intended('dashboard');
        }
        return redirect()->intended('login');
    }

    /**
     * Handle an logout.
     *
     * @return Response
     */
    public function logout() {
        if (Auth::logout()) {
            // Authentication passed...
            return redirect()->intended('login');
        }
        return back()->withInput();
    }

    public function showLoginForm() {
        return view('admin.porto.auth.signin');
    }

    public function login(Request $request) {
        $this->validate($request, [
            'email' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required'
        ]);
        User::update($request->all());
        return back()->withInput();
    }

    public function showRegistrationForm() {
        return view('admin.porto.auth.signup');
    }

    public function register(Request $request) {
        $user = $request->all();
        $user['password'] = bcrypt($request['password']);
        if (User::create($user)) {
            return redirect()->route('login');
        }
        return back()->withInput()->with('message', 'Erro ao criar!');
    }

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
        //
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

    /*
     * 
     */

    public function signIn() {
        return view('admin.porto.auth.signin');
    }

    /*
     * 
     */

    public function signUp() {
        return view('admin.porto.auth.signup');
    }

    /*
     * 
     */

    public function lockScreen() {
        return view('admin.porto.auth.lock-screen');
    }

    /*
     * 
     */

    public function recoverPassword() {
        return view('admin.porto.auth.recover-password');
    }

}
