<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 26/2/15
 * Time: 2:48 PM
 */


use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Hostel extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    protected $table = 'hostels';

    public $primaryKey = 'id';

}