<?php

class entities extends \BaseController {

	public $restful = true;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$entities = DB::table('entities')->orderBy('id')->get();

		return View::make('entities.index')
		->with('title','entities')
		->with('entities', $entities)
		->with('active', 'entities');
	}

	public function insert()
	{
		
		DB::table('entities')->insert(
		array('name' => Input::get('frm_name'),
		'branch' => Input::get('frm_branch'),  
		'email' => Input::get('frm_email'),
		'phone' => Input::get('frm_phone'), 
		'created_at' => date('Y-m-d'), 
		'updated_at' => date('Y-m-d'))
	); 
		return Redirect::to('./entities')->with('message',"L'entité a bien été enregistré")->withInput();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$entities = DB::table('entities')->get();

		return View::make('entities.new')
		->with('entities', $entities)
		->with('title', "Ajout d'un nouveau post");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}