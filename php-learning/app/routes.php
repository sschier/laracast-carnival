<?php

// get and post functions add the key and controller to the 'GET' and 'POST' arrays


$router->get('', 'PagesController@home');

$router->get('about', 'PagesController@about');

$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');  //To display or render all our users

$router->post('users', 'UsersController@store');

