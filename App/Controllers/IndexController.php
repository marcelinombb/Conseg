<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function primariRout() {

		$this->render('cadastroVenda');
	}

	public function loginUser() {

		//Lógica para logar o usuário e acessar o cadastro da venda
			
			// - Testar os tipos de dados recebidos
			// - Recebr meu user e senha 
			// - Verifica se existe aquele usuário

		$this->render('cadastroVenda');
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