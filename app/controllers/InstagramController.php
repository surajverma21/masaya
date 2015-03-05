<?php

Class InstagramController extends BaseController{

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

    public function getImages(){

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
}

?>