<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

    public function generateRandomStringForImage($tableName,$fieldName){

        $newImage_name = str_random(12);

        $count = DB::table($tableName)->count();

        if($count){
            $search = DB::table($tableName)->where($fieldName, '=',$newImage_name)->get();

            while($search){

                $newImage_name = str_random(12);
                $search = DB::table($tableName)->where($fieldName, '=',$newImage_name)->get();

            }
            return $newImage_name;
        }

        return $newImage_name;

    }

    public function generateHoursForTime($key){

            $Get_time = explode(' ',$key);
            $hours = $Get_time[1];
            $time = $Get_time[2];
            $time_in_24_hour_format  = date("H", strtotime($hours.' '.$time));
    }
}
?>