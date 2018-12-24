<?php
/**
 * this is the class that handle the request for specific route
 */
class Request
{

  public static function uri()
  {
    	return trim($_SERVER['REQUEST_URI'],'/');
  }
}

 ?>
