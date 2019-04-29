<?php
 
$users = $app['database']->selectAll('users', 'User');
//var_dump($users);
$app['database']->insert('users', [
	'name' =>  $_POST['name']
]);
//var_dump($users);

header('Location: /');

