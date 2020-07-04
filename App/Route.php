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
			'controller' => 'indexController',
			'action' => 'cadastrarVenda'
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

	

		$this->setRoutes($routes);
	}

}

?>