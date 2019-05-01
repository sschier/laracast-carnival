<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';


$uri = trim($_SERVER['REQUEST_URI'], '/');


//Need to give load method both the uri and the request method (get or post)
//No longer need to require anything; we are newing up a $controller
Router::load('routes.php')->direct(Request::uri(), Request::method());






