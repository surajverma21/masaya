<?php

class FrontController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function change_language () {
        $languages = LanguageSwitcher::All();
        return $languages;
    }

    public function index()
    {
        $laguages = $this->change_language();


        $events = DB::table('events')->where('event_legend_img', '=', 'yes')->get();   // All events

        $medium = DB::table('events')->where('event_medium_img', '=', 'yes')->where('month_id', '=', 3)->get(); // medium events

        $small = DB::table('events')->where('event_medium_img', '=', NULL)->where('event_legend_img', '=', NULL)->where('month_id', '=', 3)->get(); // small events

        $data['monthly_activity'] = View::make('front.eventpartial')->with('medium',$medium)->with('small',$small);

        $promotional_artist = DB::table('promotional_artists')->where('hostel_id', '=', 1)->get();    // Change this when get hostel in session.

        $activities = Activity::All();

        $cityguide = DB::table('city_guide')->where('id', '=', 1)->get();

        $touristic = DB::table('time_to_touristic_points')->where('hostel_id', '=', 1)->get();  // partial load later

        $hostels = DB::table('hostels')->take(2)->get();    // limit set for 2 records

        $socialObject    = new SocialController;

        $instagramPictures = $socialObject->getInstagramImages();

        return View::make('front.event',$data)->with('events',$events)->with('activities',$activities)->with('promotional_artist',$promotional_artist)->with('cityguide',$cityguide)->with('touristic',$touristic)->with('hostels',$hostels)->with('langs', $laguages)->with('instagramPictures',$instagramPictures);
    }


    //Small & medium images
    public function getactivity($month=null)
    {
        $month=Input::get('month');
        $medium = DB::table('events')->where('event_medium_img', '=', 'yes')->where('month_id', '=', $month)->get();
        $small = DB::table('events')->where('event_medium_img', '=', NULL)->where('event_legend_img', '=', NULL)->where('month_id', '=', $month)->get();
        return View::make('front.eventpartial')->with('mediumevent',$medium)->with('smallevent',$small);
    }

    public function gettouristic()
    {
        $id=Input::get('hostelid');
        $touristic = DB::table('time_to_touristic_points')->where('hostel_id', '=', $id)->get();  // partial load later
        return View::make('front.touristicpartial')->with('touristic',$touristic);
       // echo "<pre>";print_r($touristic);die;
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
