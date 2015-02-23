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

        $member->full_name      = $full_name;
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

    public function update_member(){

        //return Redirect::to('admin/members');

        if(!Input::get('password'))
        {
            $id = Input::get('id');
            $full_name = Input::get('full_name');
            $username = Input::get('username');
            $email = Input::get('email');
            $contact_number= Input::get('contact_number');

            $member = Member::find($id);

            $member->full_name      = $full_name;
            $member->username       = $username;
            $member->email          = $email;
            $member->contact_number = $contact_number;
        } else {

            $id = Input::get('id');
            $full_name = Input::get('full_name');
            $username = Input::get('username');
            $email = Input::get('email');
            $contact_number= Input::get('contact_number');
            $password = Hash::make(Input::get('password'));

            $member = Member::find($id);

            $member->full_name      = $full_name;
            $member->username       = $username;
            $member->email          = $email;
            $member->contact_number = $contact_number;
            $member->password       = $password;

        }

        if($member->save()){
            return Redirect::to('admin/members');
        }else{
            return View::make('admins.edit{id}')->with('message', 'Some error occurred');
        }


    }

    public function get_members(){

        $members = Member::All();
        return View::make('admins.list_members')->with('members',$members);
    }

    public function edit_member(){


        $member_id = Route::input('id');

        $member = Member::find($member_id);
//        return $member;
        return View::make('admins.edit')->with('member', $member);
        /*if(!$member){
            return 'No member ID provided';
        }
        $memberObject = Member::find($member);

        $memberObject->delete();

        return 'Member removed successfully';*/

    }

    public function delete_members(){


       $member = Input::get('member_id');

        if(!$member){
            return 'No member ID provided';
        }
        $memberObject = Member::find($member);

        $memberObject->delete();

        return 'Member removed successfully';

    }

}
