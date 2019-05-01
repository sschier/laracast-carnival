<?php

namespace App\Controllers;

use App\Core\App;


class PagesController

{
	

	public function home()
	{
		//require 'functions.php';

		$tasks = App::get('database')->selectAll('todos', 'App\Models\Task');

		$highPriorityTasks = highPriority($tasks);
		$lowPriorityTasks = lowPriority($tasks);

		//$users = App::get('database')->selectAll('users', 'App\Models\User');

		return view('index', ['highPriorityTasks' => $highPriorityTasks, 'lowPriorityTasks' => $lowPriorityTasks]);

	}

	public function about()
	{
		return view('about');
		
	}

	public function contact()
	{
		return view('contact');
		
	}

	// 	public function addName()
	// {
	// 	$users = App::get('database')->selectAll('users', 'User');
	
	// 	App::get('database')->insert('users', [
	// 		'name' =>  $_POST['name']
	// 	]);

	// 	header('Location: /');
		
	// }
}