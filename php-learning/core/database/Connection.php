<?php

require 'User.php';
require 'Task.php'; 

//All this class does is return a database connection as a PDO
class Connection

{

	public static function make($config)

	{
	
		try {

		 	return new PDO(
		 		$config['connection'].';dbname='.$config['name'],
		 		$config['username'],
		 		$config['password'],
		 		$config['options']
		 	);
		} catch (PDOException $e) {
	 		die($e->getMessage());
	 	}

	}

}