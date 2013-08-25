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
	return View::make('users.index');
});
Route::get('users', function()
{
	return View::make('users.index');
});
Route::post('admin', function()
{
	$Log = Input::get('id');
	$Pass = Input::get('password');
    return $Log." ".$Pass;
});
/*Route::get('article/{numero?}', function($numero = null)
{
    if ($numero) return "Le numéro de l'article est $numero";
    else return 'aucun article mentionné ! ';
});*/