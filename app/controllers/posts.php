<?php

class posts extends \BaseController {

	public $restful = true;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = DB::table('posts')->orderBy('enddate','ASC')->get();
		$users = DB::table('users')->get();
		
		return View::make('posts.index')
		->with('title','Posts')
		->with('posts', $posts)
		->with('users', $users)
		->with('active', 'posts');
	}

	public function insert()
	{
		
		/*DB::table('posts')->insert(
		array('content' => $_POST['frm_content'],
		'people1' => Input::get('frm_people1'), 
		'people2' => Input::get('frm_people2'), 
		'people3' => Input::get('frm_people3'), 
		'people4' => Input::get('frm_people4'), 
		'people5' => Input::get('frm_people5'), 
		'isdone' => Input::get('frm_isdone'),
		'enddate' => Input::get('frm_enddate'), 
		'user_id' => Input::get('frm_user_id'),  
		'importance' => Input::get('frm_importance'), 
		'created_at' => date('Y-m-d H:m:s'), 
		'updated_at' => date('Y-m-d H:m:s'))
	);*/  
		Redirect::to('posts')->with('message',"Le post a bien été enregistré")->withInput();;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$posts = DB::table('posts')->orderBy('enddate','ASC')->get();
		$users = DB::table('users')->get();

		return View::make('posts.new')
		->with('title','newPost')
		->with('posts', $posts)
		->with('users', $users)
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