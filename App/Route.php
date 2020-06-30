<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['index2'] = array(
			'route' => '/login2',
			'controller' => 'indexController',
			'action' => 'login2'
		);

		$this->setRoutes($routes);
	}

}

?>