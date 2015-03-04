<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class HostelRoomPreview extends  Eloquent implements UserInterface, RemindableInterface{

    use UserTrait, RemindableTrait;

    protected $table = 'hostel_room_preview';

    public $primaryKey = 'id';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = array('password', 'remember_token');
    public $timestamps = false;


    public function hostel(){

        return $this->belongsTo('Hostel','hostel_id','id');
    }

}