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
// Front end

Route::get('/events-activities','FrontController@index');
Route::get('/getactivities','FrontController@getactivity');


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
Route::get('admin/time-to-touristic','HostelsController@touristic_choose_hostel')->before('auth');
Route::post('admin/touristic','HostelsController@time_to_touristic')->before('auth');
Route::get('admin/touristic/add','HostelsController@new_time_to_touristic')->before('auth');
Route::get('admin/touristic','HostelsController@time_to_touristic')->before('auth');
Route::post('admin/save_touristic','HostelsController@save_touristic')->before('auth');
Route::get('admin/edit_time_to_touristic/{id}','HostelsController@edit_touristic')->before('auth');
Route::post('admin/update_touristic','HostelsController@update_touristic')->before('auth');
Route::get('admin/delete_time_to_touristics','HostelsController@delete_touristic')->before('auth');

//Travel Tips
Route::get('admin/travel_tip','HostelsController@travel_tip_choose_hostel')->before('auth');
Route::post('admin/travel-tips-index','HostelsController@list_travel_tips')->before('auth');
Route::get('admin/travel-tips-index','HostelsController@list_travel_tips')->before('auth');
Route::get('admin/travel-tip-add','HostelsController@add_travel_tip')->before('auth');
Route::post('admin/save_travel_tip','HostelsController@save_travel_tip')->before('auth');
Route::post('admin/save_travel_tip','HostelsController@save_travel_tip')->before('auth');
Route::get('admin/delete_travel_tip','HostelsController@delete_travel_tip')->before('auth');
Route::get('admin/edit-travel-tip/{id}','HostelsController@edit_travel_tip')->before('auth');
Route::post('admin/update_travel_tip','HostelsController@update_travel_tip')->before('auth');
Route::get('admin/travel-tips-index/{id}','HostelsController@list_travel_tips_for_hotel')->before('auth');



//Hostels
Route::get('admin/hostels','HostelsController@index')->before('auth');
Route::get('admin/add_hostel','HostelsController@add_hostel')->before('auth');
Route::post('admin/save_hostel','HostelsController@save_hostel')->before('auth');
Route::get('admin/edit_hostel/{id}','HostelsController@edit_hostel')->before('auth');
Route::post('admin/update_hostel','HostelsController@update_hostel')->before('auth');
Route::get('admin/delete_hostel','HostelsController@delete_hostel')->before('auth');
//Route::get('admin/');

//Languages
Route::get('admin/languages','LanguagesController@index');
Route::get('admin/add_language','LanguagesController@add_language');
Route::post('admin/save_language','LanguagesController@save_language');
Route::get('admin/edit_language/{id}','LanguagesController@edit_language');
Route::post('admin/update_language','LanguagesController@update_language');
Route::get('admin/delete_language','LanguagesController@delete_language');

//Activities
Route::get('admin/activities','ActivitiesController@index');
Route::get('admin/add_activity','ActivitiesController@add_activity');
Route::post('admin/save_activity','ActivitiesController@save_activity');
Route::get('admin/edit_activity/{id}','ActivitiesController@edit_activity');
Route::post('admin/update_activity','ActivitiesController@update_activity');
Route::get('admin/delete_activity','ActivitiesController@delete_activity');

// Test
//Mehar Singh
Route::get('test',function(){
	return View::make('testing');
});

//testkljlklkjn
//suraj verma

//Route::get('/admin',function)->before('auth');