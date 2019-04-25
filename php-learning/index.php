<?php

require 'functions.php';

class Task {

	
}




$task = [

	'title' => "dishes",
	'due' => "today",
	'assigned_to' => "Wendy",
	'completed' => true

]; //title, due, assigned_to, completed

$person = [

	'age' => 31, 
	'hair' => "Brown",
	'eyes' => "Hazel",
	'horoscope' => "Dog"
]; 

if(over_21(20)) {
	echo "Come on in";
} else {echo "Go away";}

dd($task);

$person['name'] = "Sheena";

require 'index.view.php';