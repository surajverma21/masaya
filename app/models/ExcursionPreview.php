<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/3/15
 * Time: 6:25 PM
 */


use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;


class ExcursionPreview extends Eloquent implements UserInterface, RemindableInterface{

    use UserTrait, RemindableTrait;

    protected $table = 'hostel_excursions';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function language(){

        return $this->belongsTo('Language','language_id','id');
    }

    public function hostel(){

        return $this->belongsTo('Hostel','hostel_id','id');
    }

} 