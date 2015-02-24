<?php

class EventsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('admins.event');
	}

    public function save()
    {
//        return Input::all();
        $title          = Input::get('event_title');
        $sub_title      = Input::get('event_sub_title');
        $text           = Input::get('event_text');
        $month          = Input::get('month');

        if (Input::hasFile('event_image'))
        {
            $image  = Input::file('event_image');
//                $image[$i]->move('../uploads', $image[$i]->getClientOriginalName());
        }

        $event = new HostelEvent;

        $event->event_title         = $title;
        $event->event_sub_title     = $sub_title;
        $event->event_text          = $text;
        $event->event_image         = $image->getClientOriginalName();
        $event->month_id            = $month;

        if($event->save()){
            return View::make('admins.index');
        }else{
            return View::make('admins.events')->with('message', 'Some error occurred');
        }
//        return $image[2];
    }

    private function generateUniqueBarId(){

        $newBar_id = mt_rand(11111111,88888888);
        $search = DB::table('barowners')->where('bar_id', '=',$newBar_id)->get();

        while($search){

            $newBar_id = mt_rand(11111111,88888888);
            $search = DB::table('barowners')->where('bar_id', '=',$newBar_id)->get();

        }
        return $newBar_id;
    }

    public function isUnique($username){

        $search = DB::table('barowners')->where('username', '=',$username)->get();

        if(empty($search)){
            return 'Available';
        }else{
            return 'Not Available';
        }
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
