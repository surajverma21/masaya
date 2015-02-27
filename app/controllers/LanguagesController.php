<?php

Class LanguagesController extends BaseController{

    public function index(){

        $languages  = Language::all();
        return View::make('admins.list_languages')->with('languages',$languages);
    }

    public function add_language(){

        return View::make('admins.add_language');

    }

    public function save_language(){

        $name                    = Input::get('name');
        $lang_code               = Input::get('lang_code');

        $tableName = 'languages';

        $fieldName = 'icon';

        if(Input::hasFile('icon')){

            $destinationPath = '../uploads/languages';

            $languageFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('icon')->move($destinationPath, $languageFileName);

        }else{

            $languageFileName = '';
        }

        $language                 =   new Language;
        $language->name           =   $name;
        $language->lang_code      =   $lang_code;
        $language->icon           =   $languageFileName;


        $language->save();

        return Redirect::to('admin/languages')->with('msg','Language added successfully');
    }

    public function edit_language(){

        $language_id = Route::input('id');

        $language = Language::find($language_id);

        if(!$language){
               return Redirect::to('admin/languages');
        }

        return View::make('admins/edit_language')->with('language',$language);
    }

    public function update_language(){

        $language_id               = Input::get('language_id');

        $language                  = Language::find($language_id);

        $name                      = Input::get('name');
        $lang_code                 = Input::get('lang_code');

        $tableName = 'languages';

        $fieldName = 'icon';

        if(Input::hasFile('icon')){

            $destinationPath = '../uploads/languages';

            $languageFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('icon')->move($destinationPath, $languageFileName);

        }else{

            $languageFileName = $language->icon;
        }

        $language->name                     =   $name;
        $language->lang_code                =   $lang_code;
        $language->icon                     =   $languageFileName;


        $language->save();

        return Redirect::to('admin/languages')->with('msg','Language updated successfully');
    }

    public function delete_language(){

        $language_id = Input::get('language_id');

        $language = Language::find($language_id);

        if($language){
            $language->delete();

            @unlink('../uploads/languages/'.$language->icon);

            return Redirect::to('admin/languages')->with('msg','Language removed successfully');;
        }

    }

}