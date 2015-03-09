<?php

class LanguageController extends BaseController {


    public function chooser()
    {

        //        SET LANGUAGE CODE IN SESSION
        Session::set('locale', Input::get('locale'));

        $lang_code = Session::get('locale');

        //        SET LANGUAGE ID IN SESSION
        $language_data = Language::Where('lang_code','=',$lang_code)->get();
        $lang_id = $language_data[0]->id;
        Session::set('language_id', $lang_id);

        //$data = $this->event_n_activities_data($lang_code, 1);
        return "Language changed successfully";
    }


    public function event_n_activities_data($lang_name = 'en', $hostel_id = 1) {

        $language_data = Language::Where('lang_code','=',$lang_name)->get();
        $lang_id = $language_data[0]->id;

        $complete_data = array();
//        EVENTS DATA
        $complete_data['events'] = HostelEvent::Where('lang_id','=',$lang_id)->Where('hostel_id','=',$hostel_id)->get();

//         CITY GUIDE DATA
//        $complete_data['city_guide'] = CityGuide::Where('language_id','=',$lang_id)->Where('hostel_id','=',$hostel_id)->get();

//        COMMENTS ARRIVE
//        $complete_data['comments'] = CityGuide::Where('lang_id','=',$lang_id)->Where('hostel_id','=',$hostel_id)->get();

//        HOSTEL DATA
//        $complete_data['hostel'] = Hostel::Where('id','=',$hostel_id)->get();

//        PROMOTIONAL ARTIST DATA
//        $complete_data['artist'] = PromotionalArtist::Where('language_id','=',$lang_id)->Where('hostel_id','=',$hostel_id)->get();

//        TOURISTIC POINT DATA
//        $complete_data['touristic'] = TimeToTouristic::Where('language_id','=',$lang_id)->Where('hostel_id','=',$hostel_id)->get();

//        TRAVEL TIP DATA
//        $complete_data['travel_tip'] = TravelTip::Where('lang_id','=',$lang_id)->Where('hostel_id','=',$hostel_id)->get();


        return $complete_data;

    }

}
