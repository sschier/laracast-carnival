<?php

$config = require 'config.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';


//$pdo = Connection::make();
// passing a PDO to QueryBuilder with database 'mytodo', which is of class 'Task' ,
return new QueryBuilder(Connection::make($config['database'])); 