<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function primariRout() {

		$this->render('login');
	}

	public function painel(){

		$this->render('painel');

	}

}

?>