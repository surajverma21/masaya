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
        return View::make('admins.event', array('hostels' => $hostels ));
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

        if (Input::hasFile('event_image'))
        {
            $image      = Input::file('event_image');
            $image_name = $this->genUniqueImageName();
            $image->move('../uploads/events', $image_name);
        }

        $event = new HostelEvent;

        $event->event_title         = $title;
        $event->event_sub_title     = $sub_title;
        $event->event_text          = $text;
        $event->event_image         = $image_name;
        $event->month_id            = $month;
        $event->event_legend_img    = $legend;
        $event->event_medium_img    = $medium;
        $event->hostel_id           = $hostel;

        if($event->save()){
            return View::make('admins.index');
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

        $hostels = Hostel::All()->lists('name' ,'id');
        $event = HostelEvent::find($event_id);
        return View::make('admins.edit_event', array('hostels' => $hostels ))->with('event', $event);
        /*if(!$member){
            return 'No member ID provided';
        }
        $memberObject = Member::find($member);

        $memberObject->delete();

        return 'Member removed successfully';*/

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



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
