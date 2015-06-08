<?php

	class Home_2 extends Controller
	{
		public function index($name = '', $anothername = '')
		{
			/*
			$user = $this->model('User');
			$user->name = $name;

			$this->view('home_2/index', ['name' => $user->name]);
			*/

			echo $name . ' ' . $anothername;

			// Now if we put in url, home_2/Alex/Nick
			// Output is "Alex Nick"

		}

		public function sum($num1, $num2)
		{
			$result = $num1 + $num2;

			echo $result;

			// Now if we put in url, home_2/sum/2/2
		}
	}