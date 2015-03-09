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
        $trip_adviser_id         = (!empty(Input::get('trip_adviser_id'))) ? Input::get('trip_adviser_id') : '';

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
        $hostel->trip_advisor_id            =   $trip_adviser_id;

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
        $trip_adviser_id         = (!empty(Input::get('trip_adviser_id'))) ? Input::get('trip_adviser_id') : '';

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
        $hostel->trip_advisor_id            =   $trip_adviser_id;

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
        $hostel_id = Session::get('hostel_id');

        return View::make('admins.add_timetotouristics', array('hostel_id' => $hostel_id , 'languages' => $languages));

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
            $hostel_id = Session::get('hostel_id');

            return View::make('admins.add_travel_tips')->with('languages',$languages)->with('hostel_id',$hostel_id);

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
        $promotionalArtist->sub_title                   = $sub_title;
        $promotionalArtist->promotional_artist_image    = $promotionalArtistFileName;

        $promotionalArtist->save();

        return Redirect::action('HostelsController@promotional_artist_index_all')->with('msg','Promotional artist added successfully');
    }
    public function edit_promotional_artist(){

        $promotional_artists_id = Route::input('id');

        $promotional_artists = PromotionalArtist::find($promotional_artists_id);
        //echo "<pre>"
        if(!$promotional_artists){
               return Redirect::to('admin/promotional_artist_index_all');
        }

        return View::make('admins/edit_promotional_artist')->with('promotional_artist',$promotional_artists);
    }
    public function update_promotional_artist(){
        //echo "hii";die;

        $validation = Validator::make(Input::all(),['title' => 'required','sub_title' =>'required','promotional_artist_text' => 'required']);

        if($validation->fails()){

            return Redirect::back()->withInput()->withErrors($validation->messages());
        }

        $promotional_artist_id               = Input::get('promotional_artist_id');

        $promotional_artist                  = PromotionalArtist::find($promotional_artist_id);
        $promotional_artist_old_image               = $promotional_artist->promotional_artist_image;


        $title                    = Input::get('title');
        $sub_title                   = Input::get('sub_title');
        $promotional_artist_text                 = Input::get('promotional_artist_text');

        $tableName = 'promotional_artists';

        $fieldName = 'promotional_artist_image';

        if(Input::hasFile('promotional_artist_image')){

            $destinationPath = '../uploads/promotional_artist';

            $promotionalArtistFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('promotional_artist_image')->move($destinationPath, $promotionalArtistFileName);
            @unlink('../uploads/promotional_artist/'.$promotional_artist_old_image);

        }else{

            $promotionalArtistFileName = $promotional_artist->promotional_artist_image;
        }

        $promotional_artist->title                       =   $title;
        $promotional_artist->sub_title                      =   $sub_title;
        $promotional_artist->promotional_artist_text  =   $promotional_artist_text;
        $promotional_artist->promotional_artist_image  =   $promotionalArtistFileName;

       

        $promotional_artist->save();

        return Redirect::to('admin/promotional-artist-index-all')->with('msg','Promotional Artist Updated successfully');
    }
    public function delete_promotional_artist(){


        $promotional_artist_id = Input::get('primery_id');

        $promotional_artist = PromotionalArtist::find($promotional_artist_id);

        if($promotional_artist){
            $promotional_artist->delete();

            @unlink('../uploads/promotional_artist/'.$promotional_artist->promotional_artist_image);

            return Redirect::to('admin/list-excursion-hostel-previews-all')->with('msg','Excursion removed successfully');
        }

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

        $city_guide = CityGuide::with('language')->with('hostel')->where('hostel_id','=',$hostel_id)->get();

        return View::make('admins.list_city_guide')->with('city_guide',$city_guide);

    }

    public function city_guide_add(){

        $languages = Language::All()->lists('name' ,'id');

        return View::make('admins.add_city_guide')->with('languages',$languages);

    }

    public function save_city_guide(){

        $language_id        = Input::get('language');
        $hostel_id          = Session::get('hostel_id');
        $city_guide_text    = Input::get('city_guide_text');

        if(empty($hostel_id)){

            $hostel_id = Session::get('hostel_id');
            $hostel_id = $hostel_id[0];
        }

        $tableName = 'city_guide';

        $fieldName = 'city_guide_image';


        if(Input::hasFile('city_guide_image')){

            $destinationPath = '../uploads/city_guide';

            $cityGuideFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('city_guide_image')->move($destinationPath, $cityGuideFileName);

        }else{

            $cityGuideFileName = '';
        }

        $cityGuide                              = new CityGuide;
        $cityGuide->hostel_id                   = $hostel_id;
        $cityGuide->city_guide_text             = $city_guide_text;
        $cityGuide->language_id                 = $language_id;
        $cityGuide->city_guide_image            = $cityGuideFileName;

        $cityGuide->save();

        return Redirect::action('HostelsController@city_guide_index_all')->with('msg','City guide artist added successfully');
    }

       public function city_guide_index_all(){


           $hostel_id = Session::get('hostel_id');

           $city_guide = CityGuide::with('language')->with('hostel')->where('hostel_id','=',$hostel_id)->get();



 //          return $city_guide; die;

           return View::make('admins.list_city_guide')->with('city_guide',$city_guide);

       }
    public function edit_city_guide(){

        $city_guide_id = Route::input('id');

        $city_guide = CityGuide::find($city_guide_id);
        if(!$city_guide){
               return Redirect::to('admin/city_guide_index_all');
        }

        return View::make('admins/edit_city_guide')->with('city_guide',$city_guide);
    }
    public function update_city_guide(){
        //echo "hii";die;

        $validation = Validator::make(Input::all(),['city_guide_text' => 'required']);

        if($validation->fails()){

            return Redirect::back()->withInput()->withErrors($validation->messages());
        }

        $city_guide_id               = Input::get('city_guide_id');

        $city_guide                  = CityGuide::find($city_guide_id);
        $city_guide_old_image        = $city_guide->city_guide_image;


        $city_guide_text             = Input::get('city_guide_text');
        
        $tableName = 'city_guide';

        $fieldName = 'city_guide_image';

        if(Input::hasFile('city_guide_image')){
          //  echo "image";die;

            $destinationPath = '../uploads/city_guide';

            $cityGuideFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('city_guide_image')->move($destinationPath, $cityGuideFileName);
            @unlink('../uploads/city_guide/'.$city_guide_old_image);

        }else{

            $cityGuideFileName = $city_guide->city_guide_image;
        }

        $city_guide->city_guide_text                       =   $city_guide_text;
        $city_guide->city_guide_image  =   $cityGuideFileName;

        $city_guide->save();

        return Redirect::to('admin/city-guide-index-all')->with('msg','Promotional Artist Updated successfully');
    }
    public function delete_city_guide(){


        $city_guide_id = Input::get('primery_id');

        $city_guide = CityGuide::find($city_guide_id);

        if($city_guide){
            $city_guide->delete();

            @unlink('../uploads/city_guide/'.$city_guide->city_guide_image);

            return Redirect::to('admin/city-guide-index-all')->with('msg','Record successfully deleted');
        }

    }
    

    public function promotional_artist_edit(){


        $id = Route::input('id');

        $tip_id             = Route::input('id');
        $promotional_artist = PromotionalArtist::with('hostel')->with('language')->find($tip_id);
        $hostel_id          = Session::get('hostel_id');
        $languages          = Language::All()->lists('name' ,'id');

        if(empty($promotional_artist)){

            return View::make('admins.edit_promotional_artist',array('hostel' => $hostel_id));
        }else{
            return View::make('admins.edit_promotional_artist')->with('promotional_artist',$promotional_artist)->with('languages',$languages);
        }

    }

    public function promotional_artist_update(){

        $id                 = Input::get('resource_id');
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

        $promotionalArtist  = PromotionalArtist::find($id);

        if(Input::hasFile('promotional_artist_image')){

            $destinationPath = '../uploads/promotional_artist';

            $promotionalArtistFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('promotional_artist_image')->move($destinationPath, $promotionalArtistFileName);

            @unlink('../uploads/promotional_artist/'.$promotionalArtist->promotional_artist_image);

        }else{

            $promotionalArtistFileName = $promotionalArtist->promotional_artist_image;
        }



        $promotionalArtist->title                       = $title;
        $promotionalArtist->promotional_artist_text     = $description;
        $promotionalArtist->language_id                 = $language_id;
        $promotionalArtist->sub_title                   = $sub_title;
        $promotionalArtist->promotional_artist_image    = $promotionalArtistFileName;

        $promotionalArtist->save();

        return Redirect::action('HostelsController@promotional_artist_index_all')->with('msg','Promotional artist updated successfully');

    }

    public function how_to_get_there(){

        $hostels  = Hostel::all();

        return View::make('admins.choose_hostel_how_to_get_there')->with('hostels',$hostels);
    }

    public function how_to_get_there_index(){

        if(Input::get('hostel')){

            $hostel_id = Input::get('hostel');
            Session::forget('hostel_id');
            Session::put('hostel_id',$hostel_id);
        }else{
            $hostel_id = Session::get('hostel_id');
        }


        $how_to_get_there = HowToGetThere::with('language')->with('hostel')->where('hostel_id','=',$hostel_id)->get();

        return View::make('admins.list_how_to_get_there_index')->with('how_to_get_there',$how_to_get_there);
    }
    public function how_to_get_there_add(){

        $languages = Language::All()->lists('name' ,'id');
        $hostel_id = Session::get('hostel_id');

        return View::make('admins.add_how_to_get_there')->with('languages',$languages)->with('hostel_id',$hostel_id);
    }

    public function how_to_get_there_save(){

        $language_id                    = Input::get('language');
        $hostel_id                      = Session::get('hostel_id');
        $how_to_get_there_title         = Input::get('title');
        $how_to_get_there_description   = Input::get('description');

        if(empty($hostel_id)){

            $hostel_id = Session::get('hostel_id');
            $hostel_id = $hostel_id[0];
        }

        $how_to_get_there                              = new HowToGetThere;
        $how_to_get_there->hostel_id                   = $hostel_id;
        $how_to_get_there->title                       = $how_to_get_there_title;
        $how_to_get_there->lang_id                 = $language_id;
        $how_to_get_there->description                 = $how_to_get_there_description;

        $how_to_get_there->save();

        return Redirect::action('HostelsController@how_to_get_there_index_all')->with('msg','How to get there added successfully');
    }

    public function how_to_get_there_index_all(){

        if(Input::get('hostel')){

            $hostel_id = Input::get('hostel');
            Session::forget('hostel_id');
            Session::put('hostel_id',$hostel_id);
        }else{
            $hostel_id = Session::get('hostel_id');
        }


        $how_to_get_there = HowToGetThere::with('language')->with('hostel')->where('hostel_id','=',$hostel_id)->get();

        return View::make('admins.list_how_to_get_there_index')->with('how_to_get_there',$how_to_get_there);
    }

    public function edit_how_to_get_there(){

        $id = Route::input('id');

        $how_to_get_there   =   HowToGetThere::with('hostel')->find($id);
        $languages          =   Language::All()->lists('name' ,'id');

        if(empty($how_to_get_there)){
            return Redirect::to('admin/how-to-get-there-index');
        }

        return View::make('admins.edit_how_to_get_there')->with('how_to_get_there',$how_to_get_there)->with('languages',$languages);

    }

    public function how_to_get_there_update(){

        $id          =  Input::get('id');
        $language    =  Input::get('language');
        $title       =  Input::get('title');
        $description =  Input::get('description');


        $how_to_get_there_update                    = HowToGetThere::find($id);
        $how_to_get_there_update->language_id       = $language;
        $how_to_get_there_update->title             = $title;
        $how_to_get_there_update->description       = $description;
        $how_to_get_there_update->save();


        return Redirect::action('HostelsController@how_to_get_there_index_all')->with('msg','How to get there updated successfully');

    }
}