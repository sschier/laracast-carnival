<?php
class QueryBuilder 

{
	protected $pdo;

	public function __construct(PDO $pdo)

	{
		$this->pdo = $pdo;
	}


	public function selectAll($table, $class)

	{
		$statement = $this->pdo->prepare("select * from {$table}");
		
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS, $class);
	}

	public function insert($table, $parameters)

	{
		
		$sql = sprintf(
			'insert into %s (%s) values (%s)',
			$table, 
			implode(', ', array_keys($parameters)),
			//implode(', ', array_values($parameters))
			//values we want as a set of placeholders
			':' . implode(', :',  array_keys($parameters))
		);
		//var_dump($sql);
		try {

		$statement = $this->pdo->prepare($sql);
		
		$statement->execute($parameters);

		} catch(Exception $e) {
			die('Whoops, something is wrong');
		}



		//return $statement->fetchAll(PDO::FETCH_CLASS);
	}
}
