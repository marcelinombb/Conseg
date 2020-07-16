<?php

    namespace App\Controllers;

    use MF\Controller\Action;
    use MF\Model\Container;

    class VendaController extends Action {

        public function vendas() {

        $this->render('cadastroVenda');

        }

        public function salvarVenda() {
            
		$venda = Container::getModel('Venda');

		$venda->__set('nome', $_POST['nome']);
		$venda->__set('sobrenome', $_POST['sobrenome']);
		$venda->__set('idade', $_POST['idade']);
		$venda->__set('dataDeNascimentoDadosPessoais', $_POST['dataDeNascimentoDadosPessoais']);
		$venda->__set('rg', $_POST['rg']);
		$venda->__set('cpf', $_POST['cpf']);
		$venda->__set('dataDeExpedicao', $_POST['dataDeExpedicao']);
		$venda->__set('ruaEndereço', $_POST['ruaEndereço']);
		$venda->__set('cepEndereço', $_POST['cepEndereço']);
		$venda->__set('cidadeEndereco', $_POST['cidadeEndereco']);
		$venda->__set('estadoEndereço', $_POST['estadoEndereço']);
		$venda->__set('escolaridadeEndereco', $_POST['escolaridadeEndereco']);
		$venda->__set('paiEndereco', $_POST['paiEndereco']);
		$venda->__set('maeEndereco', $_POST['maeEndereco']);
		$venda->__set('nomeDoConjeEndereco', $_POST['nomeDoConjeEndereco']);
		$venda->__set('dataDeNascimentoEndereco', $_POST['dataDeNascimentoEndereco']);
		$venda->__set('telefoneEndereço', $_POST['telefoneEndereço']);
		$venda->__set('pontoDeRefrenciaEndereço', $_POST['pontoDeRefrenciaEndereço']);
		$venda->__set('tempoDeResidenciaEndereço', $_POST['tempoDeResidenciaEndereço']);
		$venda->__set('tipoResidencia', $_POST['tipoResidencia']);
		$venda->__set('ocupacaoAtividade', $_POST['ocupacaoAtividade']);
		$venda->__set('empresaAtividade', $_POST['empresaAtividade']);
		$venda->__set('inicioAtividade', $_POST['inicioAtividade']);
		$venda->__set('telefoneDaEmpresaAtividade', $_POST['telefoneDaEmpresaAtividade']);
		$venda->__set('enderecoDaEmpresa', $_POST['enderecoDaEmpresa']);
		$venda->__set('salario', $_POST['salario']);
		$venda->__set('outrasRendas', $_POST['outrasRendas']);
		$venda->__set('primeiraReferencia', $_POST['primeiraReferencia']);
		$venda->__set('segundaReferencia', $_POST['segundaReferencia']);
		$venda->__set('primeiroTelefone', $_POST['primeiroTelefone']);
		$venda->__set('segundoTelefone', $_POST['segundoTelefone']);
		$venda->__set('emailCliente', $_POST['emailCliente']);
		$venda->__set('vendedor', $_POST['vendedor']);
		$venda->__set('lider', $_POST['lider']);
		$venda->__set('dataDaVenda', $_POST['dataDaVenda']);
		$venda->__set('formadePagamento', $_POST['formadePagamento']);
		$venda->__set('produto', $_POST['produto']);
		$venda->__set('cor', $_POST['cor']);
		$venda->__set('tipoDoMetal', $_POST['tipoDoMetal']);
		$venda->__set('voltagem', $_POST['voltagem']);
		$venda->__set('numeroSerie', $_POST['numeroSerie']);
		$venda->__set('proximaTrocadeRefil', $_POST['proximaTrocadeRefil']);

		$venda->salvarVenda();
            //echo'<pre>';
                //print_r($_POST);
            //echo'</pre>';
            
            // - cadastra o formulário da venda
            // - redireciona para o painel
    
            $this->render('/painel');
        }
    }

