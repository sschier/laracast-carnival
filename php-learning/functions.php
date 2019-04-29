<?php

function connectToDb()
{
	try {
	 	return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
	} catch (PDOException $e) {
 		die($e->getMessage());
 	}
}

function fetchAllTasks($pdo)
{
	$statement = $pdo->prepare('select * from todos');
 	$statement->execute();

 	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function highPriority($data) 
{
	$filtered_data = array_filter($data, function ($entry) {
		return $entry->priority > 3;

	});

	return $filtered_data;
}

function lowPriority($data) 
{
	$filtered_data = array_filter($data, function ($entry) {
		return $entry->priority < 4;

	});

	return $filtered_data;
}


function dd($data) {

	echo '<pre>';
	die(var_dump($data));
	echo '<pre>';
}

function over_21($age) {

	if($age<21) {
		return false;
	} else {return true;}
}