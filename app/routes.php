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

// Admin Members
Route::get('admin/addmember','MembersController@addmember')->before('auth');
Route::post('admin/save','MembersController@save_admin')->before('auth');
Route::get('admin/members','MembersController@get_members')->before('auth');
Route::get('admin/edit/{id}','MembersController@edit_member')->before('auth');
Route::post('admin/update','MembersController@update_member')->before('auth');
Route::get('admin/delete','MembersController@delete_members')->before('auth');

// Events & Activities
Route::get('admin/events-activities','EventsController@index')->before('auth');
Route::post('admin/save-events','EventsController@save')->before('auth');
Route::get('admin/events','EventsController@get_events')->before('auth');
Route::get('admin/edit_event/{id}','EventsController@edit_event')->before('auth');
Route::post('admin/update_event','EventsController@update_event')->before('auth');
Route::get('admin/delete_event','EventsController@delete_events')->before('auth');
Route::resource('admin/events-activities','EventsController');


// Test
Route::get('test',function(){
	return 'Test!';
});

//Route::get('/admin',function)->before('auth');