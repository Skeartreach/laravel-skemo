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
		$entities = DB::table('entities')->get();
		$users = User::all();
		
		return View::make('posts.index')
		->with('title','Posts')
		->with('posts', $posts)
		->with('users', $users)
		->with('entities', $entities)
		->with('active', 'posts');
	}

	public function insert()
	{
		if (!(Session::has('username')))
		{
		    	return Redirect::to('./login'); 
		}else{
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
		return Redirect::to('./posts')->with('message',"Le post a bien été enregistré");
	}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$posts = DB::table('posts')->orderBy('enddate','ASC')->get();
		$entities = DB::table('entities')->get();
		$users = User::all();

		return View::make('posts.new')
		->with('title','newPost')
		->with('posts', $posts)
		->with('entities', $entities)
		->with('users', $users)
		->with('title', "Ajout d'un nouveau post");
	}

	public function close($id)
	{
		if (!(Session::has('username')))
		{
		    	return Redirect::to('./login'); 
		}else{

		$postsClose = Post::find($id);
		$postsClose->isdone = 1 ;
		$postsClose->save();

		return Redirect::to('./posts')->with('message',"Le poste a bien été terminé");
	}
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
	if (!(Session::has('username')))
		{
		    	return Redirect::to('./login'); 
		}
		else{

			$entities = DB::table('entities')->get();
			$post= Post::find($id);

			return View::make('posts.edit')
			->with('entities', $entities)
			->with('post' , $post);
		}
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
	 * @return Response
	 */
	public function update()
	{
		if (!(Session::has('username')))
		{
		    	return Redirect::to('./login'); 
		}else{

		$currentPost = Post::find(Input::get('frm_id'));
		$currentPost->content = Input::get('frm_content');
		$currentPost->people1 = Input::get('frm_people1');
		$currentPost->people2 = Input::get('frm_people2'); 
		$currentPost->people3 = Input::get('frm_people3'); 
		$currentPost->enddate = Input::get('frm_enddate'); 
		$currentPost->user_id = Input::get('frm_entity_id');  
		$currentPost->importance = Input::get('frm_importance'); 
		$currentPost->updated_at = date('Y-m-d');
		$currentPost->save();
		return Redirect::to('./posts')->with('message',"Le post a bien été mis à jour");
	}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (Session::has('username')&& Session::get('isadmin')==1)
		{
			$postsClose = Post::find($id);
			$postsClose->delete();

		return Redirect::to('./posts')->with('message',"Le poste a bien été supprimé");
		    	
		}else{

			return Redirect::to('./posts')->with('message',"Vous ne pouvez pas supprimer cette action, vous n'êtes pas administrateur")
			->with('type',"warning");		
		}
	}

}