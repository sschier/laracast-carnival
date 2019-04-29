<?php

require 'core/bootstrap.php';


$uri = trim($_SERVER['REQUEST_URI'], '/');


//Need to give load method both the uri and the request method (get or post)
require Router::load('routes.php')->direct(Request::uri(), Request::method());






