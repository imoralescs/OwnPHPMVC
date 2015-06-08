<?php

	class App
	{
		// Especify default controller
		// protected $controller = 'home_2';
		protected $controller = 'home';

		// This is URL method, that we create in controller
		protected $method = 'index';

		protected $params = [];

		public function __construct()
		{
			$url = $this->parseUrl();

			// Array is $url[0] position, this is for default place.
			if(file_exists('../app/controllers/' . $url[0] . '.php'))
			{
				// Always default will be 'home', because we especify in protectd variable
				$this->controller = $url[0];
				unset($url[0]);
			}

			require_once '../app/controllers/' . $this->controller . '.php';

			$this->controller = new $this->controller;

			// This direct you, to controller in $url[1]
			if(isset($url[1]))
			{
				if(method_exists($this->controller, $url[1]))
				{
					$this->method = $url[1];
					unset($url[1]);
				}
			}	

			$this->params = $url ? array_values($url) : [];

			call_user_func_array([$this->controller, $this->method], $this->params);
		}

		// Take the Url and Explode
		//
		// Explode() is a function break a string into array, take string and blow it up into small pieces.
		public function parseUrl()
		{
			if(isset($_GET['url']))
			{
				// explode(separator, string, limit);
				return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
			}
		}
	}