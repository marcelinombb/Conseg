<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function primariRout() {

		$this->render('login');
	}


	public function buscaClientesCadastrados() {

		$this->render('cadastroUsuario');
	}

	public function cadastroUsuario() {

		$this->render('cadastroUsuario');
	}


}


?>