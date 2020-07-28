<?php

namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action
{

	public function primariRout()
	{

		$this->render('login');
	}

	public function painel()
	{

		$this->render('painel');
	}
}
