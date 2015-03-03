<?php

class FrontController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       // $events = HostelEvent::All();
        $events = DB::table('events')->where('event_legend_img', '=', 'yes')->get();
        $medium = DB::table('events')->where('event_medium_img', '=', 'yes')->where('month_id', '=', 3)->get();
       //echo '<pre>'; print_r($medium);die;
        $small = DB::table('events')->where('event_medium_img', '=', NULL)->where('event_legend_img', '=', NULL)->where('month_id', '=', 3)->get();
        $data['monthly_activity'] = View::make('front.eventpartial')->with('medium',$medium)->with('small',$small);

        $promotional_artist = DB::table('promotional_artists')->where('hostel_id', '=', 1)->get();
        $activities = Activity::All();


        return View::make('front.event',$data)->with('events',$events)->with('activities',$activities)->with('promotional_artist',$promotional_artist);
    }


    //Small & medium images
    public function getactivity($month=null)
    {
        $month=Input::get('month');
        $medium = DB::table('events')->where('event_medium_img', '=', 'yes')->where('month_id', '=', $month)->get();
        $small = DB::table('events')->where('event_medium_img', '=', NULL)->where('event_legend_img', '=', NULL)->where('month_id', '=', $month)->get();
        return View::make('front.eventpartial')->with('mediumevent',$medium)->with('smallevent',$small);
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
