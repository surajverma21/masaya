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
Route::get('/gettouristic','FrontController@gettouristic');




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

//Promotional artists

Route::get('admin/promotional_artists','HostelsController@promotional_artists_choose_hostel');
Route::post('admin/promotional-artist-index','HostelsController@promotional_artist_index');
Route::get('admin/promotional-artist-add','HostelsController@add_promotional_artist');
Route::post('admin/promotional-artist-save','HostelsController@save_promotional_artist');
Route::get('admin/promotional-artist-index-all','HostelsController@promotional_artist_index_all');
Route::get('admin/edit-promotional-artist/{id}','HostelsController@promotional_artist_edit');


//City Guide image on Activities page

Route::get('admin/city-guide','HostelsController@city_guide_choose_hostel')->before('auth');
Route::post('admin/city-guide-index','HostelsController@city_guide_index')->before('auth');
Route::get('admin/city-guide-add','HostelsController@city_guide_add')->before('auth');
Route::post('admin/save-city-guide','HostelsController@save_city_guide')->before('auth');
Route::get('admin/city-guide-index-all','HostelsController@city_guide_index_all')->before('auth');


//Hostels
Route::get('admin/hostels','HostelsController@index')->before('auth');
Route::get('admin/add_hostel','HostelsController@add_hostel')->before('auth');
Route::post('admin/save_hostel','HostelsController@save_hostel')->before('auth');
Route::get('admin/edit_hostel/{id}','HostelsController@edit_hostel')->before('auth');
Route::post('admin/update_hostel','HostelsController@update_hostel')->before('auth');
Route::get('admin/delete_hostel','HostelsController@delete_hostel')->before('auth');


//Languages
Route::get('admin/languages','LanguagesController@index')->before('auth');
Route::get('admin/add_language','LanguagesController@add_language')->before('auth');
Route::post('admin/save_language','LanguagesController@save_language')->before('auth');
Route::get('admin/edit_language/{id}','LanguagesController@edit_language')->before('auth');
Route::post('admin/update_language','LanguagesController@update_language')->before('auth');
Route::get('admin/delete_language','LanguagesController@delete_language')->before('auth');

//Activities
Route::get('admin/activities','ActivitiesController@index')->before('auth');
Route::get('admin/add_activity','ActivitiesController@add_activity')->before('auth');
Route::post('admin/save_activity','ActivitiesController@save_activity')->before('auth');
Route::get('admin/edit_activity/{id}','ActivitiesController@edit_activity')->before('auth');
Route::post('admin/update_activity','ActivitiesController@update_activity')->before('auth');
Route::get('admin/delete_activity','ActivitiesController@delete_activity')->before('auth');

//Excursion
Route::get('admin/excursion','ExcursionController@excursion_choose_hostel')->before('auth');
Route::post('admin/excursion-index','ExcursionController@list_excursion_hostel_previews')->before('auth');
Route::get('admin/excursion-add','ExcursionController@excursion_add')->before('auth');
Route::post('admin/excursion-save','ExcursionController@excursion_save')->before('auth');
Route::get('admin/list-excursion-hostel-previews-all','ExcursionController@list_excursion_hostel_previews_all');






Route::get('admin/hostel-room-preview-image','HostelRoomsController@hostel_preview_image');
Route::any('admin/choose-hostel-preview-index','HostelRoomsController@choose_hostel_preview_index');
Route::post('admin/save-hostel-room_preview','HostelRoomsController@save_hostel_room_preview');

//Route::get('/admin',function)->before('auth');
//Event::listen('illuminate.query', function($query)
//{
//    var_dump($query);
//});
