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


        $name        = Input::get('name');
        $description = Input::get('description');

        $destinationPath = '../uploads/hostels';

        $tableName = 'hostels';

        $fieldName = 'image';

        if(Input::hasFile('hostel_image')){

            $fileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('hostel_image')->move($destinationPath, $fileName);
        }

        $hostel = new Hostel;
        $hostel->name =  $name;
        $hostel->description = $description;
        $hostel->image = $fileName;

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
        return(Input::all());
    }

    public function delete_hostel(){
        return 'Hello from delete';
    }

}