<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'primariRout'
		);

		$routes['login'] = array(
			'route' => '/login',
			'controller' => 'AuthController',
			'action' => 'autenticar'
		);

		$routes['cadastrarVenda'] = array(
			'route' => '/cadastrarVenda',
			'controller' => 'VendaController',
			'action' => 'vendas'
		);

		$routes['salvarVenda'] = array(
			'route' => '/salvarVenda',
			'controller' => 'VendaController',
			'action' => 'salvarVenda'
		);

		$routes['painel'] = array(
			'route' => '/painel',
			'controller' => 'indexController',
			'action' => 'painel'
		);

		$routes[''] = array(
			'route' => '/cadastroUsuario',
			'controller' => 'indexController',
			'action' => 'cadastroUsuario'
		);

		$routes[''] = array(
			'route' => '/cadastroUsuario',
			'controller' => 'indexController',
			'action' => 'cadastroUsuario'
		);

		$routes['sair'] = array(
			'route' => '/sair',
			'controller' => 'AuthController',
			'action' => 'sair'
		);

	

		$this->setRoutes($routes);
	}

}

?>