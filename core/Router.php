<?php
	/**
	 * this class used to define the end point for routes
	 */
	class Router
	{
		protected $routes;


		static function load($file)
		{
			$router = new static;

			require $file;

			return $router;

		}


		function define($routes)
		{

			$this->routes = $routes;
		}

		function direct($uri)
		{

			if (array_key_exists($uri,$this->routes)) {

				return $this->routes[$uri];

			}

			throw new Exception("No Routes defined for this end point.");

		}
	}

 ?>
