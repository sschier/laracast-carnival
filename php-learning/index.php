<?php

require 'functions.php';
//require 'database/Connection.php';
//require 'database/QueryBuilder.php';
require 'Task.php';

//$pdo = connectToDb();
//$pdo = Connection::make();

//$query = new QueryBuilder($pdo);
 
$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos', 'Task');

//var_dump($tasks);



require 'index.view.php';