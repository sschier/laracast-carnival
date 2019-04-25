<?php

class Router

{

	protected $routes = [];

	public static function load($file)

	{
		$router = new self;

		require $file;

		return $router;
	}

	public function define($routes)

	{
		$this->routes = $routes;
	}

	public function direct($uri)
	{

		// about/culture
		if (array_key_exists($uri, $this->routes)) {

			return $this->routes[$uri];
		}

		throw new Exception('No routed defined for this URI');
	}




}