<?php

function redirect($path) {

	header("Location: /{$path}");
}

function view($name, $data = []) {

	extract($data);

	return require "app/views/{$name}.view.php";
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

