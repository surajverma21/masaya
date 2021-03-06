<?php

class EventsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        $hostels = Hostel::All()->lists('name' ,'id');
        $languages = Language::All()->lists('name' ,'id');

        return View::make('admins.event', array('hostels' => $hostels , 'languages' => $languages));
	}

    public function save()
    {
        $title          = Input::get('event_title');
        $sub_title      = Input::get('event_sub_title');
        $text           = Input::get('event_text');
        $month          = Input::get('month');
        $legend         = Input::get('event_legend');
        $medium         = Input::get('event_medium');
        $hostel         = Input::get('hostel_id');
        $language         = Input::get('language_id');

        $event = new HostelEvent;


        if (Input::hasFile('event_image'))
        {
            $image      = Input::file('event_image');
            $image_name = $this->genUniqueImageName();
            $image->move('../uploads/events', $image_name);
        }
        else
        {
            $image_name = "";
        }


        $event->event_title         = $title;
        $event->event_sub_title     = $sub_title;
        $event->event_text          = $text;
        $event->event_image         = $image_name;
        $event->month_id            = $month;
        $event->event_legend_img    = $legend;
        $event->event_medium_img    = $medium;
        $event->hostel_id           = $hostel;
        $event->lang_id             = $language;

        if($event->save()){
            return View::make('admins/index');
        }else{
            return View::make('admins.events')->with('message', 'Some error occurred');
        }
    }

    public function get_events() {

        $events = HostelEvent::All();
        return View::make('admins.list_events')->with('events',$events);
    }

    public function edit_event(){


        $event_id = Route::input('id');

        $hostels    = Hostel::All()->lists('name' ,'id');
        $languages  = Language::All()->lists('name' ,'id');

        $event = HostelEvent::find($event_id);

        return View::make('admins.edit_event', array('hostels' => $hostels, 'languages' => $languages  ))->with('event', $event);

    }

    public function update_event(){

        //return Redirect::to('admin/members');


        $id         = Input::get('id');
        $title      = Input::get('title');
        $sub_title  = Input::get('sub_title');
        $text       = Input::get('text');
        $month      = Input::get('month');
        $legend     = Input::get('event_legend');
        $medium     = Input::get('event_medium');
        $hostel     = Input::get('hostel_id');
        $language   = Input::get('language_id');


        if (Input::hasFile('event_image'))
        {
            $image      = Input::file('event_image');
            $image_name = $this->genUniqueImageName();
            $image->move('../uploads/events', $image_name);

            $event = HostelEvent::find($id);

            $event->id                  = $id;
            $event->event_title         = $title;
            $event->event_sub_title     = $sub_title;
            $event->event_text          = $text;
            $event->event_image         = $image_name;
            $event->month_id            = $month;
            $event->event_legend_img    = $legend;
            $event->event_medium_img    = $medium;
            $event->hostel_id           = $hostel;
            $event->lang_id             = $language;
        } else {

            $event = HostelEvent::find($id);

            $event->id                  = $id;
            $event->event_title         = $title;
            $event->event_sub_title     = $sub_title;
            $event->event_text          = $text;
//            $event->event_image         = $image->getClientOriginalName();
            $event->month_id            = $month;
            $event->event_legend_img    = $legend;
            $event->event_medium_img    = $medium;
            $event->hostel_id           = $hostel;
            $event->lang_id             = $language;
        }



        if($event->save()){
            return Redirect::to('admin/events');
        }else{
            return View::make('admins.edit_event{id}')->with('message', 'Some error occurred');
        }


    }

    public function delete_events(){


        $event = Input::get('event_id');

        if(!$event){
            return 'No event ID provided';
        }
        $eventObject = HostelEvent::find($event);

        $eventObject->delete();

        return 'Event removed successfully';

    }

    private function genUniqueImageName(){

        $newImage_name = str_random(12);
        $search = DB::table('events')->where('event_image', '=',$newImage_name)->get();

        while($search){

            $newImage_name = str_random(12);
            $search = DB::table('events')->where('event_image', '=',$newImage_name)->get();

        }
        return $newImage_name;
    }


    public function hotel_event_info(){

        $hostels  = Hostel::all();

        return View::make('admins.choose_hostel_event_info')->with('hostels',$hostels);

}

    public function hostel_event_info_index(){

        if(Input::get('hostel')){

            $hostel_id = Input::get('hostel');
            Session::forget('hostel_id');
            Session::put('hostel_id',$hostel_id);

        }else{

            $hostel_id = Session::get('hostel_id');
        }

        $hostel_event_info = HostelEventInfo::with('language')->with('hostel')->where('hostel_id','=',$hostel_id)->get();

        return View::make('admins.list_hostel_event_info_index')->with('hostel_event_info',$hostel_event_info);

    }

    public function add_hostel_event_info(){

        $languages = Language::All()->lists('name' ,'id');
        $hostel_id = Session::get('hostel_id');

        return View::make('admins.add_hostel_event_info')->with('languages',$languages)->with('hostel_id',$hostel_id);
    }

    public function save_hostel_event_info(){

        $language_id                =  Input::get('language');
        $hostel_id                  =  Session::get('hostel_id');
        $title                      =  Input::get('title');
        $description                =  Input::get('description');
        $extra_info                 =  Input::get('extra_info');

        $hostel_event_info                       =     new HostelEventInfo;
        $hostel_event_info->hostel_id            = $hostel_id;
        $hostel_event_info->language_id          = $language_id;
        $hostel_event_info->title                = $title;
        $hostel_event_info->description          = $description;
        $hostel_event_info->extra_info           = $extra_info;
        $hostel_event_info->save();

        return Redirect::action('EventsController@hostel_event_info_index')->with('msg','City guide artist added successfully');
    }

    public function edit_hostel_event_info(){

        $hostel_event_info_id = Route::input('id');

        $hostel_event_info = HostelEventInfo::find($hostel_event_info_id);

        $languages = Language::All()->lists('name' ,'id');

        if(!$hostel_event_info){
            return Redirect::to('admin/excursion');
        }

        return View::make('admins/edit_hostel_event_info')->with('hostel_event_info',$hostel_event_info)->with('languages' , $languages);

    }

    public function update_hostel_event_info(){

        $id                         =  Input::get('resource_id');
        $language_id                =  Input::get('language');
        $title                      =  Input::get('title');
        $description                =  Input::get('description');
        $extra_info                 =  Input::get('extra_info');

        $hostel_event_info                       =  HostelEventInfo::find($id);
        $hostel_event_info->language_id          = $language_id;
        $hostel_event_info->title                = $title;
        $hostel_event_info->description          = $description;
        $hostel_event_info->extra_info           = $extra_info;
        $hostel_event_info->save();

        return Redirect::action('EventsController@hostel_event_info_index')->with('msg','Hostel event info updated successfully');

    }

    public function delete_hostel_event_info(){

        $info_id = Input::get('info_id');

        $hostel_info =  HostelEventInfo::find($info_id);
        $hostel_info->delete();

        return 'Hostel Info deleted successfully!';
    }


}
?>
