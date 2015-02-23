<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
//    Auth::loginUsingId(1);
//    dd('Email : '.Auth::user()->email.'<br>Name : '.Auth::user()->full_name);
	return View::make('admins/logins/index');
});*//*
Route::get('/index', function()
{
    return View::make('index');
});

Route::get('/lang', function()
{
    return View::make('language');
});

Route::post('/language', array(
    'before'    => 'csrf',
    'as'        => 'language-chooser',
    'uses'      => 'LanguageController@chooser'
));*/

Route::get('/admin', array('as' => 'home', 'uses' => 'MembersController@index'))->before('auth');
Route::get('admin','MembersController@index')->before('auth');
Route::get('login','MembersController@index')->before('guest');
Route::get('admin/index','MembersController@index')->before('auth');
Route::post('admin/auth_admin','MembersController@auth_admin');
Route::get('admin/logout','MembersController@logout');
Route::get('admin/addmember','MembersController@addmember')->before('auth');
Route::post('admin/save','MembersController@save_admin')->before('auth');

Route::get('test',function(){
	return 'Test!';
});

//Route::get('/admin',function)->before('auth');