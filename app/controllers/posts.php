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
<<<<<<< HEAD
		$entities = DB::table('entities')->get();
=======
		$users = DB::table('users')->get();
>>>>>>> f2ffdea5ef53ad83958677dd15b0b0538ab86a74
		
		return View::make('posts.index')
		->with('title','Posts')
		->with('posts', $posts)
<<<<<<< HEAD
		->with('entities', $entities)
=======
		->with('users', $users)
>>>>>>> f2ffdea5ef53ad83958677dd15b0b0538ab86a74
		->with('active', 'posts');
	}

	public function insert()
	{
		
<<<<<<< HEAD
		DB::table('posts')->insert(
		array('content' => Input::get('frm_content'),
		'people1' => Input::get('frm_people1'), 
		'people2' => Input::get('frm_people2'), 
		'people3' => Input::get('frm_people3'), 
		'isdone' => Input::get('frm_isdone'),
		'enddate' => Input::get('frm_enddate'), 
		'user_id' => Input::get('frm_entity_id'),  
		'importance' => Input::get('frm_importance'), 
		'created_at' => date('Y-m-d'), 
		'updated_at' => date('Y-m-d'))
	); 
		return Redirect::to('./posts')->with('message',"Le post a bien été enregistré")->withInput();
=======
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
>>>>>>> f2ffdea5ef53ad83958677dd15b0b0538ab86a74
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$posts = DB::table('posts')->orderBy('enddate','ASC')->get();
<<<<<<< HEAD
		$entities = DB::table('entities')->get();
=======
		$users = DB::table('users')->get();
>>>>>>> f2ffdea5ef53ad83958677dd15b0b0538ab86a74

		return View::make('posts.new')
		->with('title','newPost')
		->with('posts', $posts)
<<<<<<< HEAD
		->with('entities', $entities)
=======
		->with('users', $users)
>>>>>>> f2ffdea5ef53ad83958677dd15b0b0538ab86a74
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