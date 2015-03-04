<?php


use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class TimeToTouristic extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    protected $table = 'time_to_touristic_points';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function language(){

        return $this->belongsTo('Language','language_id','id');
    }

    public function hostel(){

        return $this->belongsTo('Hostel','hostel_id','id');
    }
}