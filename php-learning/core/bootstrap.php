<?php

use App\Core\{App, Database\QueryBuilder, Database\Connection};

require 'functions.php';

App::bind('config', require 'config.php');




App::bind('database', new QueryBuilder(
	Connection::make(App::get('config')['database'])
));




