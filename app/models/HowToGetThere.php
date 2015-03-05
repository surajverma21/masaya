<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/3/15
 * Time: 11:41 AM
 */

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class HowToGetThere extends  Eloquent implements UserInterface, RemindableInterface{

    use UserTrait, RemindableTrait;

    protected $table = 'comments_arrive';

    public $primaryKey = 'id';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = array('password', 'remember_token');
    public $timestamps = false;

    public function language(){

        return $this->belongsTo('Language','language_id','id');
    }

    public function hostel(){

        return $this->belongsTo('Hostel','hostel_id','id');
    }


} 