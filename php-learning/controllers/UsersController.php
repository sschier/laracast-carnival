<?php

class UsersController

{

	public function index()

	{

		$users = App::get('database')->selectAll('users', 'User');

		return view('users', compact('users'));  //SAME AS: return view('index', ['users' => $users]);
	}

	public function store()

	{

		//Insert the user associated with the request
		App::get('database')->insert('users', [
			'name' =>  $_POST['name']
		]);

		//Redirect back to all users
		redirect('users');
		
	}


}