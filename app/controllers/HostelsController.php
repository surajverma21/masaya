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


        $name                    = Input::get('name');
        $description             = Input::get('description');
        $promotional_artist_text = Input::get('promotional_artist_text');


        $tableName = 'hostels';

        $fieldName = 'image';

        if(Input::hasFile('hostel_image')){

            $destinationPath = '../uploads/hostels';

            $hostelFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('hostel_image')->move($destinationPath, $hostelFileName);

        }else{

            $hostelFileName = '';
        }

        if(Input::hasFile('promotional_artist_image')){

            $destinationPath = '../uploads/promotional_artist';

            $artistFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('promotional_artist_image')->move($destinationPath, $artistFileName);

        }else{

            $artistFileName = '';
        }


       if(Input::hasFile('city_guide_image')){

           $destinationPath = '../uploads/city_guide';

           $cityGuidefileName = $this->generateRandomStringForImage($tableName,$fieldName);

           Input::file('city_guide_image')->move($destinationPath, $cityGuidefileName);

       }else{

           $cityGuidefileName = '';
       }

        if(Input::hasFile('excursion_image')){

            $destinationPath = '../uploads/excursion';

            $excursionImageFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('excursion_image')->move($destinationPath, $excursionImageFileName);

        }else{

            $excursionImageFileName = '';
        }


        $hostel                             =   new Hostel;
        $hostel->name                       =   $name;
        $hostel->description                =   $description;
        $hostel->image                      =   $hostelFileName;
        $hostel->promotional_artist_text    =   $promotional_artist_text;
        $hostel->promotional_artist_image   =   $artistFileName;
        $hostel->city_guide_image           =   $cityGuidefileName;
        $hostel->excursion_image            =   $excursionImageFileName;


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

        $hostel_id               = Input::get('hostel_id');

        $hostel                  = Hostel::find($hostel_id);

        $name                    = Input::get('name');
        $description             = Input::get('description');
        $promotional_artist_text = Input::get('promotional_artist_text');


        $tableName = 'hostels';

        $fieldName = 'image';

        if(Input::hasFile('hostel_image')){

            $destinationPath = '../uploads/hostels';

            $hostelFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('hostel_image')->move($destinationPath, $hostelFileName);

        }else{

            $hostelFileName = $hostel->image;
        }

        if(Input::hasFile('promotional_artist_image')){

            $destinationPath = '../uploads/promotional_artist';

            $artistFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('promotional_artist_image')->move($destinationPath, $artistFileName);

        }else{

            $artistFileName = $hostel->promotional_artist_image;
        }


        if(Input::hasFile('city_guide_image')){

            $destinationPath = '../uploads/city_guide';

            $cityGuidefileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('city_guide_image')->move($destinationPath, $cityGuidefileName);

        }else{

            $cityGuidefileName = $hostel->city_guide_image;
        }

        if(Input::hasFile('excursion_image')){

            $destinationPath = '../uploads/excursion';

            $excursionImageFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('excursion_image')->move($destinationPath, $excursionImageFileName);

        }else{

            $excursionImageFileName = $hostel->excursion_image;
        }



        $hostel->name                       =   $name;
        $hostel->description                =   $description;
        $hostel->image                      =   $hostelFileName;
        $hostel->promotional_artist_text    =   $promotional_artist_text;
        $hostel->promotional_artist_image   =   $artistFileName;
        $hostel->city_guide_image           =   $cityGuidefileName;
        $hostel->excursion_image            =   $excursionImageFileName;


        $hostel->save();

        return Redirect::to('admin/hostels')->with('msg','Hosted added successfully');
    }

    public function delete_hostel(){


        $hostel_id = Input::get('hostel_id');

        $hostel = Hostel::find($hostel_id);

        if($hostel){
            $hostel->delete();

            @unlink('../uploads/hostels/'.$hostel->image);
            @unlink('../uploads/promotional_artist/'.$hostel->promotional_artist_image);
            @unlink('../uploads/city_guide/'.$hostel->city_guide_image);
            @unlink('../uploads/excursion/'.$hostel->excursion_image);

            return Redirect::to('admin/hostels')->with('msg','Hotel removed successfully');
        }

    }

}