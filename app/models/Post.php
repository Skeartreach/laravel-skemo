<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class post extends Eloquent implements UserInterface, RemindableInterface {

	public function posts()
	{
		return $this->belongs_to('user');
	}
	public getAllPosts(){
		$Posts = Post::all();
		return $Posts;
	}

}