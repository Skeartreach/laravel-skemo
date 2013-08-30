<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Post extends Eloquent {

    protected $table='posts';
 
    public $timestamps = FALSE;
 
    protected $guarded = array();
 
    public static $rules = array(
		'content' => 'required',
		'isdone' => 'required',
		'enddate' => 'required',
		'isdone' => 'required',
		'user_id' => 'required',
		'importance' => 'required'
	);
}