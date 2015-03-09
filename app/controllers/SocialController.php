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

            if($tCounter > 7){
                break;
            }
            $finalT[$tCounter]['photos']  = $valueI['images']['standard_resolution']['url'];
            $finalT[$tCounter]['link']    = $valueI['link'];

            $tCounter++;
        }

        return $finalT;
    }

    public function fetchTripAdviserData($hostel_id = 4813145){

        error_reporting(0);


        $id = 4813145; //http://www.tripadvisor.in/Hotel_Review-g297484-d4813145-Reviews-Masaya_Hostel_Santa_Marta-Santa_Marta_Santa_Marta_District_Magdalena_Department.html


        $json = file_get_contents('http://api.tripadvisor.com/api/partner/2.0/location/'.$id.'?key=44d79cd5251f4e23b07f97536310033a');

        $result = json_decode($json);



        $response['name'] = $result->name;
        $response['rating'] = $result->rating;
        //$response['image'] = $result->rating_image_url;
        $response['percentage_recommended'] = $result->percent_recommended;
        $response['total_reviews'] = $result->num_reviews;


        $maxRatingUrl = '';
        $maxRating = 0;
        $i = 0;
        foreach($result->reviews as $review){

            if($review->rating > $maxRating){
                $response[$i]['maxRating'] = $review->rating;
                $response[$i]['url']    = $review->url;
                $response[$i]['maxRatingImage'] = $review->rating_image_url;
            }

            $response[$i]['text'] = $review->text;
            $i++;
        }

         return $response;
    }


}

?>