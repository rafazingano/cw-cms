<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

//Route::get('/welcome', function () {
//    return view('welcome');
//});
//Auth::routes();

Route::group(['namespace' => 'Admin'], function () {
    Route::get('/signin', 'AuthController@signIn')->name('signin');
    Route::get('/signup', 'AuthController@signUp')->name('signup');
    Route::get('/lock-screen', 'AuthController@lockScreen')->name('lock-screen');
    Route::get('/recover-password', 'AuthController@recoverPassword')->name('recover-password');

    // Authentication Routes...
    $this->get('login', 'AuthController@showLoginForm')->name('login');
    $this->post('login', 'AuthController@authenticate');
    $this->post('logout', 'AuthController@logout')->name('logout');
// Registration Routes...
    $this->get('register', 'AuthController@showRegistrationForm')->name('register');
    $this->post('register', 'AuthController@register');
// Password Reset Routes...
    $this->get('password/reset', 'AuthController@showLinkRequestForm')->name('password.request');
    $this->post('password/email', 'AuthController@sendResetLinkEmail')->name('password.email');
    $this->get('password/reset/{token}', 'AuthController@showResetForm')->name('password.reset');
    $this->post('password/reset', 'AuthController@reset');
});

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('sites', 'SiteController');
    Route::resource('options', 'OptionController');
    Route::resource('types', 'TypeController');
    Route::resource('themes', 'ThemeController');
    Route::resource('leads', 'LeadController');
    Route::resource('leadrules', 'LeadRuleController');
    Route::resource('campaigns', 'CampaignController');
    Route::resource('posts', 'PostController');
    $this->get('posts/create/{type_id}', 'PostController@create')->name('posts.create');
    $this->get('posts/list/{type_id}', 'PostController@index')->name('posts.index');
    $this->delete('posts/{type_id}/{id}', 'PostController@destroy')->name('posts.destroy');
});

Route::group(['namespace' => 'Site'], function () {
    //Route::get('/', 'HomeController@index');
    Route::post('/leads/store', 'LeadController@store')->name('lead.store');
    Route::get('/', 'PostController@show')->name('home');
    //Route::get('/{slug}', 'PostController@index')->name('post');
    Route::get('/{slug}', 'PostController@show')->name('post');
    Route::get('/{type}/{slug}', 'PostController@show')->name('type.post');
});