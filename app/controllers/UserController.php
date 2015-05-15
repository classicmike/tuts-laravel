<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = array();

		for($i = 1; $i < 4; $i++){
			$user = new StdClass();

			$user->email = "user{$i}@tutsplus.com";

			//encrypted password
			$user->password = Hash::make("MyPassword{$i}");
			$users[] = $user;
		}

		return View::make('user.index', compact('users'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in database.
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
        $user = new StdClass();

        $user->email = "user@tutsplus.com";

        //encrypted password
        $user->password = Hash::make("MyPassword2345");

        return View::make('user.show', compact('user'));
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
	 * Update the specified resource in database.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//


	}


	/**
	 * Remove the specified resource from database.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
