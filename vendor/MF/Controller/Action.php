<?php

namespace MF\Controller;

abstract class Action {

	public $view;

	public function __construct() {
		$this->view = new \stdClass();
	}

	protected function render($view,$data=array(), $layout = 'layout') {
		$this->view->page = $view;
		$this->view->buscas = $data; 

		if(file_exists("../App/Views/".$layout.".phtml")) {
			require_once "../App/Views/".$layout.".phtml";
		} else {
			$this->content();
		}
	}

	protected function content() {
		$classAtual = get_class($this);

		$classAtual = str_replace('App\\Controllers\\', '', $classAtual);

		$classAtual = strtolower(str_replace('Controller', '', $classAtual));

		require_once "../App/Views/".$this->view->page.".phtml";
	}
}

?>