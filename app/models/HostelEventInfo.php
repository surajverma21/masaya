<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/3/15
 * Time: 12:41 PM
 */

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class HostelEventInfo extends  Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    protected $table = 'hotel_event_activities_info';

    public $primaryKey = 'id';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = array('password', 'remember_token');
    public $timestamps = true;


    public function hostel(){

        return $this->belongsTo('Hostel','hostel_id','id');
    }

    public function language(){

        return $this->belongsTo('Language','language_id','id');
    }
} 