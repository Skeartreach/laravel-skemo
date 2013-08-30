<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent {

    protected $table='users';
 
    public $timestamps = FALSE;
 
    protected $guarded = array();
 
    public static $rules = array(
		'username' => 'required',
		'password' => 'required',
		'firstname' => 'required',
		'lastname' => 'required',
		'isadmin' => 'required',
		'email' => 'required'
	);
}