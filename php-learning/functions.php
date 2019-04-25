<?php

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