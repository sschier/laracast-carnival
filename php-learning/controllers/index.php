<?php

require 'functions.php'; 

$tasks = $app['database']->selectAll('todos', 'Task');
$highPriorityTasks = highPriority($tasks);
$lowPriorityTasks = lowPriority($tasks);
$users = $app['database']->selectAll('users', 'User');
//var_dump($users);



require 'views/index.view.php';