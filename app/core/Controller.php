<?php

	class Controller
	{
		protected $db;

		public function getDB()
		{
			return $this->db = new PDO('mysql:host=localhost;dbname=mvc', 'root', '');
		}

		protected function model($model)
		{
			require_once '../app/models/' . $model . '.php';
			return new $model($this->getDB());
			
			/* OLD //
			require_once '../app/models/' . $model . '.php';
			return new $model();
			*/
		}

		protected function view($view, $data = [])
		{
			require_once '../app/views/' . $view . '.php';
		}
	}