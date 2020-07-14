<?php

    namespace App\Controllers;

    use MF\Controller\Action;
    use MF\Model\Container;

    class VendaController extends Action {

        public function vendas() {

        $this->render('cadastroVenda');

        }

        public function salvarVenda() {
            
		//$usuario = Container::getModel('Venda');

            //echo'<pre>';
                //print_r($_POST);
            //echo'</pre>';
            
            // - cadastra o formulário da venda
            // - redireciona para o painel
    
            $this->render('/painel');
        }
    }

