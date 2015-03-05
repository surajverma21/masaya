<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/3/15
 * Time: 6:17 PM
 */

class ExcursionController extends BaseController{


    public function excursion_choose_hostel(){

        $hostels  = Hostel::all();

        return View::make('admins.choose_hostel_excursion')->with('hostels',$hostels);
    }

    public function list_excursion_hostel_previews(){

        if(Input::get('hostel')){

            $hostel_id = Input::get('hostel');
            Session::forget('hostel_id');
            Session::put('hostel_id',$hostel_id);

        }else{

            $hostel_id = Session::get('hostel_id');
        }

        $excursion_hostel = ExcursionPreview::with('language')->with('hostel')->where('hostel_id','=',$hostel_id)->get();

        return View::make('admins.list_excursion_previews')->with('excursion_hostel',$excursion_hostel);

    }

    public function excursion_add(){

        $languages = Language::All()->lists('name' ,'id');

        return View::make('admins.add_excursion_preview')->with('languages',$languages);

    }

    public function excursion_save(){

        $language_id         =  Input::get('language');
        $hostel_id           =  Session::get('hostel_id');
        $excursion_text      =  Input::get('excursion_text');

        $tableName           =  'hostel_excursions';

        $fieldName           =  'excursion_image';
        $excursion           =  new ExcursionPreview;

        if(Input::hasFile('excursion_preview_image')){

            $destinationPath = '../uploads/excursion';

            $excursionFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('excursion_preview_image')->move($destinationPath, $excursionFileName);

        }else{

            $excursionFileName = '';
        }

        
        $excursion->hostel_id           = $hostel_id;
        $excursion->excursion_text      = $excursion_text;
        $excursion->excursion_image      = $excursionFileName;
        $excursion->language_id         = $language_id;
        $excursion->save();

        return Redirect::action('ExcursionController@list_excursion_hostel_previews_all')->with('msg','City guide artist added successfully');
    }

    public function list_excursion_hostel_previews_all(){

        $hostel_id = Session::get('hostel_id');

        $excursion_hostel = ExcursionPreview::with('language')->with('hostel')->where('hostel_id','=',$hostel_id)->get();

        return View::make('admins.list_excursion_previews')->with('excursion_hostel',$excursion_hostel);

    }
     public function edit_excursion(){

        $excursion_id = Route::input('id');

        $excursion = ExcursionPreview::find($excursion_id);
        //echo "<pre>";print_r($excursion);die;

        if(!$excursion){
               return Redirect::to('admin/excursion');
        }

        return View::make('admins/edit_excursion')->with('excursion',$excursion);
    }

    public function update_excursion(){

        $validation = Validator::make(Input::all(),['excursion_text' => 'required']);

        if($validation->fails()){

            return Redirect::back()->withInput()->withErrors($validation->messages());
        }

        $excursion_id               = Input::get('excursion_id');

        $excursion                  = ExcursionPreview::find($excursion_id);
        //echo "<pre>";print_r($excursion);die;
        $excursion_text             = Input::get('excursion_text');
        

        $tableName = 'hostel_excursions';

        $fieldName = 'excursion_image';

        if(Input::hasFile('excursion_preview_image')){

            $destinationPath = '../uploads/excursion';

            $excursionFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('excursion_preview_image')->move($destinationPath, $excursionFileName);
            @unlink('../uploads/excursion/'.$excursion->excursion_image);


        }else{

            $excursionFileName = $excursion->excursion_image;
        }

        
        $excursion->excursion_text   =   $excursion_text;
        $excursion->excursion_image  =   $excursionFileName;
        

        $excursion->save();

        return Redirect::to('admin/list-excursion-hostel-previews-all')->with('msg','Excursion edited successfully');
    }
    public function delete_excursion(){


        $excursion_id = Input::get('primery_id');

        $excursion = ExcursionPreview::find($excursion_id);

        if($excursion){
            $excursion->delete();

            @unlink('../uploads/excursion/'.$excursion->excursion_image);

            return Redirect::to('admin/list-excursion-hostel-previews-all')->with('msg','Excursion removed successfully');
        }

    }

} 