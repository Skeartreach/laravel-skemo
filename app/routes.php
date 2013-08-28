<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('entities', array('uses'=>'entities@index'));
Route::get('posts', array('uses'=>'posts@index'));
Route::get('posts/new', array('uses'=>'posts@create'));
Route::any('posts/add', array('uses'=>'posts@insert'));
Route::get('entities/new', array('uses'=>'entities@create'));
Route::any('entities/add', array('uses'=>'entities@insert'));