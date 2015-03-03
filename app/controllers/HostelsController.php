<?php

Class HostelsController extends BaseController{

    public function index(){

        $hostels  = Hostel::all();
        return View::make('admins.list_hostels')->with('hostels',$hostels);
    }

    public function add_hostel(){

        return View::make('admins.add_hostel');

    }

    public function save_hostel(){


        $validation = Validator::make(Input::all(),['name' => 'required','email' =>'required','address' => 'required']);

        if($validation->fails()){

            return Redirect::back()->withInput()->withErrors($validation->messages());
        }

        $name                    = Input::get('name');
        $email                   = Input::get('email');
        $address                 = Input::get('address');

        $contact_number1         = (!empty(Input::get('contact_number1'))) ? Input::get('contact_number1') : '';
        $contact_number2         = (!empty(Input::get('contact_number2'))) ? Input::get('contact_number1') : '';
        $contact_number3         = (!empty(Input::get('contact_number3'))) ? Input::get('contact_number1') : '';


        $tableName = 'hostels';

        $fieldName = 'image';

        if(Input::hasFile('hostel_image')){

            $destinationPath = '../uploads/hostels';

            $hostelFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('hostel_image')->move($destinationPath, $hostelFileName);

        }else{

            $hostelFileName = '';
        }



        $hostel                             =   new Hostel;
        $hostel->name                       =   $name;
        $hostel->email                      =   $email;
        $hostel->address                    =   $address;
        $hostel->contact_number1            =   $contact_number1;
        $hostel->contact_number2            =   $contact_number2;
        $hostel->contact_number3            =   $contact_number3;
        $hostel->image                      =   $hostelFileName;

        $hostel->save();

        return Redirect::to('admin/hostels')->with('msg','Hosted added successfully');
    }

    public function edit_hostel(){

        $hostel_id = Route::input('id');

        $hostel = Hostel::find($hostel_id);

        if(!$hostel){
               return Redirect::to('admin/hostels');
        }

        return View::make('admins/edit_hostel')->with('hostel',$hostel);
    }

    public function update_hostel(){

        $validation = Validator::make(Input::all(),['name' => 'required','email' =>'required','address' => 'required']);

        if($validation->fails()){

            return Redirect::back()->withInput()->withErrors($validation->messages());
        }

        $hostel_id               = Input::get('hostel_id');

        $hostel                  = Hostel::find($hostel_id);

        $name                    = Input::get('name');
        $email                   = Input::get('email');
        $address                 = Input::get('address');

        $contact_number1         = (!empty(Input::get('contact_number1'))) ? Input::get('contact_number1') : '';
        $contact_number2         = (!empty(Input::get('contact_number2'))) ? Input::get('contact_number2') : '';
        $contact_number3         = (!empty(Input::get('contact_number3'))) ? Input::get('contact_number3') : '';


        $tableName = 'hostels';

        $fieldName = 'image';

        if(Input::hasFile('hostel_image')){

            $destinationPath = '../uploads/hostels';

            $hostelFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('hostel_image')->move($destinationPath, $hostelFileName);

        }else{

            $hostelFileName = $hostel->image;
        }

        $hostel->name                       =   $name;
        $hostel->email                      =   $email;
        $hostel->address                    =   $address;
        $hostel->contact_number1            =   $contact_number1;
        $hostel->contact_number2            =   $contact_number2;
        $hostel->contact_number3            =   $contact_number3;

        $hostel->save();

        return Redirect::to('admin/hostels')->with('msg','Hosted added successfully');
    }

    public function delete_hostel(){


        $hostel_id = Input::get('hostel_id');

        $hostel = Hostel::find($hostel_id);

        if($hostel){
            $hostel->delete();

            @unlink('../uploads/hostels/'.$hostel->image);

            return Redirect::to('admin/hostels')->with('msg','Hotel removed successfully');
        }

    }

    public function touristic_choose_hostel(){

        $hostels  = Hostel::all();

        return View::make('admins.choose_hostel')->with('hostels',$hostels);
    }


    public function time_to_touristic(){

        $hostel_id = Input::get('hostel');

        Session::forget('hostel_id');
        Session::put('hostel_id',$hostel_id);

        $time_to_touristics = TimeToTouristic::with('language')->with('hostel')->where('hostel_id','=',$hostel_id)->get();

        return View::make('admins.list_timetotouristics')->with('time_to_touristics',$time_to_touristics);

    }

    public function new_time_to_touristic(){

        $languages = Language::All()->lists('name' ,'id');

        return View::make('admins.add_timetotouristics')->with('languages',$languages);

    }

    public function save_touristic(){


        $hostel_id   = Input::get('hostel_id');
        $time        =  (int) Input::get('time');

        if(empty($hostel_id)){

            $hostel_id = Session::get('hostel_id');
            $hostel_id = $hostel_id[0];
        }

        $time_to_touristic_point                    = new TimeToTouristic;
        $time_to_touristic_point->hostel_id         = $hostel_id;
        $time_to_touristic_point->language_id       = Input::get('language');
        $time_to_touristic_point->time_on_point     = $time + 1;
        $time_to_touristic_point->description       = Input::get('description');


        $time_to_touristic_point->save();

        return Redirect::action('HostelsController@time_to_touristic',array('hostel' => $hostel_id))->with('msg','Touristic added successfully');
    }

    public function edit_touristic(){

        $id = Route::input('id');

        $touristic  = TimeToTouristic::with('hostel')->find($id);
        $languages  = Language::All()->lists('name' ,'id');
        $time_range = range(1,50);

        if(empty($touristic)){
            return Redirect::to('admin/touristic');
        }

        return View::make('admins.edit_timetotouristics')->with('touristic',$touristic)->with('default',$touristic->time_on_point)->with('time_range',$time_range)->with('languages',$languages);

    }

    public function update_touristic(){

        $id          =  Input::get('touristic_id');
        $hostel_id   =  Input::get('hostel_id');
        $description =  Input::get('description');
        $time        =  (int) Input::get('time');

        $time_to_touristic_point                    =  TimeToTouristic::find($id);
        $time_to_touristic_point->hostel_id         = $hostel_id;
        $time_to_touristic_point->language_id       = Input::get('language');
        $time_to_touristic_point->time_on_point     = $time + 1;
        $time_to_touristic_point->description       = $description;
        $time_to_touristic_point->save();

        return Redirect::action('HostelsController@time_to_touristic',array('hostel' => $hostel_id))->with('msg','Touristic updated successfully');

    }

    public function delete_touristic(){

        $id          =  Input::get('touristic_id');

        $touristic   =  TimeToTouristic::find($id);

        $touristic->delete();

        return 'Touristic deleted successfully';
    }

    public function time_to_touristic_with_hostel(){

        $hostel_id = Route::input('hostel_id');

        Session::forget('hostel_id');
        Session::put('hostel_id',$hostel_id);

        $time_to_touristics = TimeToTouristic::with('language')->with('hostel')->where('hostel_id','=',$hostel_id)->get();

        return View::make('admins.list_timetotouristics')->with('time_to_touristics',$time_to_touristics);

    }



        public function travel_tip_choose_hostel(){

            $hostels  = Hostel::all();

            return View::make('admins.choose_hostel_travel_tip')->with('hostels',$hostels);
        }

        public function list_travel_tips(){

            $hostel_id = Input::get('hostel');

            Session::forget('hostel_id');
            Session::put('hostel_id',$hostel_id);

            $travel_tips = TravelTip::with('language')->with('hostel')->where('hostel_id','=',$hostel_id)->get();

            return View::make('admins.list_travel_tips')->with('travel_tips',$travel_tips);

        }

        public function add_travel_tip(){

            $languages = Language::All()->lists('name' ,'id');

            return View::make('admins.add_travel_tips')->with('languages',$languages);

        }

        public function save_travel_tip(){


            $language_id = Input::get('language');
            $hostel_id   = Input::get('hostel_id');
            $title       = Input::get('title');
            $description = Input::get('description');

            if(empty($hostel_id)){

                $hostel_id = Session::get('hostel_id');
                $hostel_id = $hostel_id[0];
            }

            $travel_tip                    = new TravelTip;
            $travel_tip->hostel_id         = $hostel_id;
            $travel_tip->title             = $title;
            $travel_tip->description       = $description;
            $travel_tip->language_id       = $language_id;


            $travel_tip->save();

            return Redirect::action('HostelsController@list_travel_tips',array('hostel' => $hostel_id))->with('msg','Touristic added successfully');
        }

    public function delete_travel_tip(){

        $tip_id = Input::get('tip_id');

        $travel_tip = TravelTip::find($tip_id);

        $travel_tip->delete();

        return 'Travel tip deleted successfully';
    }

    public function edit_travel_tip(){

        $tip_id     = Route::input('id');
        $travel_tip = TravelTip::with('hostel')->with('language')->find($tip_id);
        $hostel_id  = Session::get('hostel_id');
        $languages  = Language::All()->lists('name' ,'id');

        if(empty($travel_tip)){

            return Redirect::action('HostelsController@list_travel_tips',array('hostel' => $hostel_id));
        }else{
            return View::make('admins.edit_travel_tips')->with('travel_tip',$travel_tip)->with('languages',$languages);
        }
    }

    public function update_travel_tip(){

        $tip_id      = Input::get('travel_tip_id');

        $language_id = Input::get('language');
        $hostel_id   = Input::get('hostel_id');
        $title       = Input::get('title');
        $description = Input::get('description');

        if(empty($hostel_id)){

            $hostel_id = Session::get('hostel_id');
            $hostel_id = $hostel_id[0];
        }

        $travel_tip                    = TravelTip::find($tip_id);
        $travel_tip->title             = $title;
        $travel_tip->description       = $description;
        $travel_tip->language_id       = $language_id;

        $travel_tip->save();

        return Redirect::action('HostelsController@list_travel_tips',array('hostel' => $hostel_id))->with('msg','Touristic updated successfully');

    }

    public function list_travel_tips_for_hotel(){

        $hostel_id = Route::input('id');

        Session::forget('hostel_id');
        Session::put('hostel_id',$hostel_id);

        $travel_tips = TravelTip::with('language')->with('hostel')->where('hostel_id','=',$hostel_id)->get();

        return View::make('admins.list_travel_tips')->with('travel_tips',$travel_tips);

    }

    public function promotional_artists_choose_hostel(){

        $hostels  = Hostel::all();

        return View::make('admins.choose_hostel_promotional_artist')->with('hostels',$hostels);
    }

    public function promotional_artist_index(){

            if(Input::get('hostel')){

                $hostel_id = Input::get('hostel');
                Session::forget('hostel_id');
                Session::put('hostel_id',$hostel_id);
            }else{
                $hostel_id = Session::get('hostel_id');
            }


        $promotional_artists = PromotionalArtist::with('language')->with('hostel')->where('hostel_id','=',$hostel_id)->get();

        return View::make('admins.list_promotional_artists')->with('promotional_artists',$promotional_artists);

    }

    public function promotional_artist_index_all(){


        $hostel_id = Session::get('hostel_id');

        $promotional_artists = PromotionalArtist::with('language')->with('hostel')->where('hostel_id','=',$hostel_id)->get();

        return View::make('admins.list_promotional_artists')->with('promotional_artists',$promotional_artists);

    }



    public function add_promotional_artist(){

        $languages = Language::All()->lists('name' ,'id');

        return View::make('admins.add_promotional_artist')->with('languages',$languages);

    }

    public function save_promotional_artist(){

        $language_id        = Input::get('language');
        $hostel_id          = Session::get('hostel_id');
        $title              = Input::get('title');
        $sub_title          = Input::get('sub_title');
        $description        = Input::get('promotional_artist_text');

        if(empty($hostel_id)){

            $hostel_id = Session::get('hostel_id');
            $hostel_id = $hostel_id[0];
        }

        $tableName = 'promotional_artists';

        $fieldName = 'promotional_artist_image';


        if(Input::hasFile('promotional_artist_image')){

            $destinationPath = '../uploads/promotional_artist';

            $promotionalArtistFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('promotional_artist_image')->move($destinationPath, $promotionalArtistFileName);

        }else{

            $promotionalArtistFileName = '';
        }

        $promotionalArtist                              = new PromotionalArtist;
        $promotionalArtist->hostel_id                   = $hostel_id;
        $promotionalArtist->title                       = $title;
        $promotionalArtist->promotional_artist_text     = $description;
        $promotionalArtist->language_id                 = $language_id;
        $promotionalArtist->promotional_artist_image    = $promotionalArtistFileName;

        $promotionalArtist->save();

        return Redirect::action('HostelsController@promotional_artist_index_all')->with('msg','Promotional artist added successfully');
    }

    public function city_guide_choose_hostel(){

        $hostels  = Hostel::all();

        return View::make('admins.choose_hostel_city_guide')->with('hostels',$hostels);
    }

    public function city_guide_index(){

        if(Input::get('hostel')){

            $hostel_id = Input::get('hostel');
            Session::forget('hostel_id');
            Session::put('hostel_id',$hostel_id);
        }else{
            $hostel_id = Session::get('hostel_id');
        }

        $city_guide = PromotionalArtist::with('language')->with('hostel')->where('hostel_id','=',$hostel_id)->get();

        return View::make('admins.list_city_guide')->with('city_guide',$city_guide);

    }

}