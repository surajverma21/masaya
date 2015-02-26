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


Route::get('admin/login','MembersController@login')->before('guest');
Route::get('/admin', array('as' => 'home', 'uses' => 'MembersController@index'))->before('auth');
Route::get('admin/index','MembersController@index');
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

//Hostels
Route::get('admin/hostels','HostelsController@index');
Route::get('admin/add_hostel','HostelsController@add_hostel');
Route::post('admin/save_hostel','HostelsController@save_hostel');
Route::get('admin/edit_hostel/{id}','HostelsController@edit_hostel');
Route::post('admin/update_hostel','HostelsController@update_hostel');
Route::get('admin/delete_hostel','HostelsController@delete_hostel');



// Test
//Mehar Singh
Route::get('test',function(){
	return 'Test!';
});

//testkljlklkjn
//suraj verma

//Route::get('/admin',function)->before('auth');