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

    public function time_to_touristic(){

        $hostels  = Hostel::all(); return $hostels ;

        return View::make('admins.choose_hostel')->with('hostels',$hostels);
    }

}