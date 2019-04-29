<?php

// $router->define([


// 	'' => 'controllers/index.php',

// 	'about' => 'controllers/about.php',

// 	'about-culture' => 'controllers/about-culture.php',

// 	'contact' => 'controllers/contact.php',

// 	'names' => 'controllers/add-name.php'


// ]);

// get and post functions add the key and controller to the 'GET' and 'POST' arrays


$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about-culture', 'controllers/about-culture.php');
$router->get('contact', 'controllers/contact.php');
$router->post('names', 'controllers/add-name.php');

//var_dump($router->routes);