<?php

/**
* creating the connection to databases
*/
class Connection
{

	public static function make($config)
	{
		 //connect to database
	    try {
	    	// return new PDO('mysql:host=127.0.0.1;dbname=mukera','root','');
				return new PDO(
					$config['connection'].';dbname='.$config['name'],
					$config['username'],
					$config['password'],
					$config['options']
				);
	    	echo "connected successfully";
	    } catch (PDOException $e) {
	    	die($e->getMessage());
	    }
	}
}

?>
