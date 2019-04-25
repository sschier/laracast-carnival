<?php

require 'functions.php';

class Task {

	public $description;
	protected $status_done = false;

	public function __construct($description)
	{
		$this->description = $description;
	}

	public function isDone() 
	{
		return $this->status_done;
	}

	public function complete() 
	{
		$this->status_done = true;
	}

	public function status_report() 
	{
		if($this->isDone()) {
			return 'Task Finished';
		} else {return 'Task Incomplete';}
	}

}

$tasks = [
	new Task('Go to Trader Joes'),
	new Task('Clean Up Room'),
	new Task('Vacuum')
];
//dd($tasks);

//$task->complete();
//var_dump($task->isDone());



require 'index.view.php';
