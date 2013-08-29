<?php

class branches extends \BaseController {

	public $restful = true;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$branches = DB::table('branches')->orderBy('id')->get();

		return View::make('branches.index')
		->with('title','branches')
		->with('branches', $branches)
		->with('active', 'branches');
	}

	public function insert()
	{
		if (!(Session::has('username')))
		{
		    	return Redirect::to('./login'); 
		}else{
		DB::table('branches')->insert(
		array(
		'name' => Input::get('frm_name'), 
		'created_at' => date('Y-m-d'), 
		'updated_at' => date('Y-m-d'))
	); 
		return Redirect::to('./posts')->with('message',"La branche a bien été enregistrée")->withInput();
	}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$branches = DB::table('branches')->get();

		return View::make('branches.new')
		->with('branches', $branches)
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