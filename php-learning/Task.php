<?php

class Task {

	public $description;
	protected $status_done;

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