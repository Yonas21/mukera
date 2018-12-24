<?php
/**
*created By Yonas Alem
* date: 22/12/2018
* fetch data from database
*/
class QueryBuilder 
{
	protected $pdo;

	function __construct($pdo)
	{
		$this->pdo = $pdo;
	}


	public function selectAll($table )
	{
				
		// prepare the sql query and then
		$statement = $this->pdo->prepare("select * from {$table}");

		//fire or execute
		$statement->execute();

		//then fetch it
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}


}
?>