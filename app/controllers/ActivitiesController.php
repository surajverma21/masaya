<?php

Class ActivitiesController extends BaseController{

    public function index(){

        $activities  = Activity::all();
        return View::make('admins.list_activities')->with('activities',$activities);
    }

    public function add_activity(){
        $hostels = Hostel::All()->lists('name' ,'id');
        $languages = Language::All()->lists('name' ,'id');
        return View::make('admins.add_activity', array('hostels' => $hostels , 'languages' => $languages));

    }

    public function save_activity()
    {
        $name                    = Input::get('name');
        $description             = Input::get('description');
        $lang_id               = Input::get('language_id');
        $hostel_id               = Input::get('hostel_id');
        $day                       = Input::get('day');
        $datetimerange               = Input::get('date-time-range');

        //echo $datetimerange;
        $time = explode('-',$datetimerange);
        $starttime = $time[0];
        $endtime = $time[1];


        $tableName = 'activities';

        $fieldName = 'image';

        if(Input::hasFile('image')){

            $destinationPath = '../uploads/activities';

            $activityFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('image')->move($destinationPath, $activityFileName);

        }else{

            $activityFileName = '';
        }

        $activity                             =   new Activity;
        $activity->name                       =   $name;
        $activity->description                =   $description;
        $activity->image                      =   $activityFileName;
        $activity->lang_id                    =   $lang_id;
        $activity->hostel_id                  =   $hostel_id;
        $activity->day                        =   $day;
        $activity->start_time                 =   $starttime;
        $activity->end_time                   =   $endtime;

        $activity->save();

        return Redirect::to('admin/activities')->with('msg','Activity added successfully');
    }

    public function edit_activity(){

        $activity_id = Route::input('id');

        $activity = Activity::find($activity_id);
        $hostels = Hostel::All()->lists('name' ,'id');
        $languages = Language::All()->lists('name' ,'id');
       // echo '<pre>';print_r($activity); die;
        if(!$activity){
               return Redirect::to('admin/activities');
        }

        return View::make('admins/edit_activity', array('hostels' => $hostels , 'languages' => $languages))->with('activity',$activity);
    }

    public function update_activity(){

        $activity_id             = Input::get('activity_id');

        $activity                = Activity::find($activity_id);


        print_r($activity );


        $name                    = Input::get('name');
        $description             = Input::get('description');
        $lang_id                 = Input::get('language_id');
        $hostel_id               = Input::get('hostel_id');
        $day                     = Input::get('day');
        $datetimerange           = Input::get('date-time-range');

        //echo $datetimerange;
        $time = explode('-',$datetimerange);
        $starttime = $time[0];
        $endtime = $time[1];

        $tableName = 'activities';

        $fieldName = 'image';

        if(Input::hasFile('activity_image')){

            $destinationPath = '../uploads/activities';

            $activityFileName = $this->generateRandomStringForImage($tableName,$fieldName);

            Input::file('activity_image')->move($destinationPath, $activityFileName);

        }
        else
        {
            $activityFileName = $activity->image;
        }



        $activity->name                       =   $name;
        $activity->description                =   $description;
        $activity->image                      =   $activityFileName;
        $activity->lang_id                    =   $lang_id;
        $activity->hostel_id                  =   $hostel_id;
        $activity->day                        =   $day;
        $activity->start_time                 =   $starttime;
        $activity->end_time                   =   $endtime;


        $activity->save();

        return Redirect::to('admin/activities')->with('msg','Activity updated successfully');
    }

    public function delete_activity(){

        $activity_id = Input::get('activity_id');

        $activity = Activity::find($activity_id);

        if($activity){
            $activity->delete();

            @unlink('../uploads/activities/'.$activity->image);

            return Redirect::to('admin/activities')->with('msg','Activity removed successfully');;
        }

    }

}