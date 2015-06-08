<?php

	class Home extends Controller
	{
		public function index($user = NULL)
		{
			/* OLD //
			$user = $this->model('User');
			$user->name = $name;
			*/

			$userModel = $this->model('User');

			if($user)
			{
				$user = $userModel->get($user);
			}


			$this->view('templates/header');

			$this->view('home/index', ['user' => $user]);

			$this->view('templates/footer');
		}
	}
