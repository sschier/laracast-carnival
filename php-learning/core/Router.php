<?php


namespace App\Core;

use PDO;


class Router

{

	//protected $routes = [
	public $routes = [

		'GET' => [],
		'POST' => []
	];

	public static function load($file)

	{
		$router = new self;

		require $file;

		return $router;
	}


	//Pass this function the uri and the controller end point
	//Should only be called for GET requests
	public function get($uri, $controller) {

		$this->routes['GET'][$uri] = $controller;

	}

	//Should only be called for POST requests
	public function post($uri, $controller) {

		$this->routes['POST'][$uri] = $controller;

	}


	public function direct($uri, $requestType)
	{

		if (array_key_exists($uri, $this->routes[$requestType])) { 


			//call controller action
			return $this->callAction(
				...explode('@', $this->routes[$requestType][$uri])
			);
		}

		throw new \Exception('No router defined for this URI');

	}


	protected function callAction($controller, $action)
	{
		$controller = "App\\Controllers\\{$controller}";
		
		$controller = new $controller;

		if (! method_exists($controller, $action)) {
			throw new Exception(
				"{$controller} does not respond to {$action} action."); 

		}

		return $controller->$action();
	}




}