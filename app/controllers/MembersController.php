<?php

class MembersController extends BaseController {


	public function index(){

        return View::make('admins.index');

    }

    public function auth_admin(){

            if(Auth::attempt(Input::only('username','password'))){
                return Redirect::to('admin/index');
            }else{
                return Redirect::back()->withInput()->withErrors('Invalid Username/Password');
            }

    }

    public function login(){

        return View::make('admins.logins.index');
    }

    public function logout(){

        Auth::logout();
        return Redirect::to('admin')->with('message', 'Successfully Logged Out');
    }

    public function addmember(){

        return View::make('admins.add');
    }

    public function save_admin(){

        $full_name = Input::get('full_name');
        $username = Input::get('username');
        $email = Input::get('email');
        $contact_number= Input::get('contact_number');
        $password = Hash::make(Input::get('password'));

        $member = new Member;

        $member->username       = $username;
        $member->email          = $email;
        $member->contact_number = $contact_number;
        $member->password       = $password;

        if($member->save()){
            return View::make('admins.add');
        }else{
            return View::make('admins.add')->with('message', 'Some error occurred');
        }


    }

}
