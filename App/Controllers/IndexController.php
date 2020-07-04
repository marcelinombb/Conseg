<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function primariRout() {

		$this->render('login');
	}

	public function cadastrarVenda() {

		echo'<pre>';
			print_r($_POST);
		echo'</pre>';
		// - cadastra o formulário da venda
		// - redireciona para o painel

		$this->render('painel');
	}

	public function buscaClientesCadastrados() {

		$this->render('cadastroUsuario');
	}

	public function cadastroUsuario() {

		$this->render('cadastroUsuario');
	}


}


?>