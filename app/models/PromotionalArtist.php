<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/3/15
 * Time: 12:17 PM
 */

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class PromotionalArtist extends Eloquent implements UserInterface, RemindableInterface{

    use UserTrait, RemindableTrait;

    protected $table = 'promotional_artists';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function language(){

        return $this->belongsTo('Language','language_id','id');
    }

    public function hostel(){

        return $this->belongsTo('Hostel','hostel_id','id');
    }

} 