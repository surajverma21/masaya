<?php

Class SocialController extends BaseController{

    public function object2array($object){

        $return = NULL;

        if(is_array($object))
        {
            foreach($object as $key => $value)
                $return[$key] = $this->object2array($value);
        }
        else
        {
            $var = @get_object_vars($object);

            if($var)
            {
                foreach($var as $key => $value)
                    $return[$key] = ($key && !$value) ? NULL : $this->object2array($value);
            }
            else return $object;
        }

        return $return;
    }


    //Facebook Likes
    public function fbLikeCount($id)
    {

        $json_url ='https://graph.facebook.com/'.$id.'';
        $json = file_get_contents($json_url);
        $json_output = json_decode($json);
        //echo '<pre>'; print_r($json_output); echo '</pre>'; die;
        //Extract the likes count from the JSON object
        if($json_output->likes){
            return $likes = $json_output->likes;
        }else{
            return  0;
        }
       // return View::make('front.event')->with('fblikes',$likes);
    }

    public function fetchData($url){

        $chI = curl_init();
        curl_setopt($chI, CURLOPT_URL, $url);
        curl_setopt($chI, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($chI, CURLOPT_TIMEOUT, 20);
        curl_setopt($chI, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($chI, CURLOPT_SSL_VERIFYPEER, 0);
        $result = curl_exec($chI);

        curl_close($chI);
        return $result;

    }

    public function getInstagramImages(){

        $Instagram_ID = "510627558";
        $Instagram_Token = "510627558.98ec466.00e08393fe294c9aa6e2470c7f735acb";

        $I_response = $this->fetchData("https://api.instagram.com/v1/users/self/feed?access_token=".$Instagram_Token);

        $objectI = json_decode($I_response);
        $arrayI  = $this->object2array($objectI);


        $tCounter = 0;

        foreach ($arrayI['data'] as $keyI => $valueI) {

            $finalT[$tCounter]['photos']  = $valueI['images']['standard_resolution']['url'];

            $tCounter++;
        }

        return $finalT;
    }

    public function fetchTripAdviserData($hotel_id){

        error_reporting(0);

        $total_ratings='';
        $rating_average='';
        $reviews_list='';
        $output='';
        $rating_number=array();
        $reviews=array();
        $images=array();

        $json = file_get_contents('http://api.tripadvisor.com/api/partner/2.0/location/'.$hotel_id.'?key=44d79cd5251f4e23b07f97536310033a');
        $obj = json_decode($json);

        foreach($obj->reviews as $key=>$res){

            $rating=$res->rating;
            $total_ratings[]=$rating;
            if($rating>4){
                $rating_number[]=$rating;
                $reviews[]=$res->text;
                $images[]=$res->rating_image_url;
            }
        }

        if(!empty($rating_number)){
            $rating_count=count($rating_number);
            $rating_average=(array_sum($rating_number))/$rating_count;
        }

        $total_rating_number    =   count($total_ratings);
        $prsn1                  =   ($rating_count/$total_rating_number);
        $prsn                   =   $prsn1*100;
        $maxrating              =   max($rating_number);

        $index_of_max=array_search($maxrating,$rating_number);
        $img_for_maxrating='<img src="'.$images[$index_of_max].'" />';

        if(!empty($reviews)){

            $reviews_list='<ul>';
            $i=0;
            while($i<3){
                $reviews_list.='<li>'.$reviews[$i].'</li>';
                $i++;
            }
            $reviews_list.='<ul>';
        }


        $response['total_reviews'] = $total_rating_number;
        $response['reviews_greater_than_four'] = $rating_count;
        $response['total_percentage_rated_above_four'] = $prsn;
        $response['image_for_max_rating'] = $img_for_maxrating;
        $response['reviews_list'] = $reviews_list;

        return $response;

    }
}

?>