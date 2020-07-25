<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class VendaController extends Action
{

	public function vendas()
	{

		$this->render('cadastroVenda');
	}

	public function salvarVenda()
	{

		$venda = Container::getModel('Venda');

		$venda->__set('nome', $_POST['nome']);
		$venda->__set('nacionalidade', $_POST['nacionalidade']);
		$venda->__set('idade', $_POST['idade']);
		$venda->__set('dataDeNascimentoDadosPessoais', $_POST['dataDeNascimentoDadosPessoais']);
		$venda->__set('rg', $_POST['rg']);
		$venda->__set('cpf', $_POST['cpf']);
		$venda->__set('dataDeExpedicao', $_POST['dataDeExpedicao']);
		$venda->__set('ruaEndereco', $_POST['ruaEndereco']);
		$venda->__set('cepEndereco', $_POST['cepEndereco']);
		$venda->__set('cidadeEndereco', $_POST['cidadeEndereco']);
		$venda->__set('estadoEndereco', $_POST['estadoEndereco']);
		$venda->__set('escolaridadeEndereco', $_POST['escolaridadeEndereco']);
		$venda->__set('paiEndereco', $_POST['paiEndereco']);
		$venda->__set('maeEndereco', $_POST['maeEndereco']);
		$venda->__set('nomeDoConjeEndereco', $_POST['nomeDoConjeEndereco']);
		$venda->__set('dataDeNascimentoEndereco', $_POST['dataDeNascimentoEndereco']);
		$venda->__set('telefoneEndereco', $_POST['telefoneEndereco']);
		$venda->__set('telefoneCelular', $_POST['telefoneCelular']);
		$venda->__set('pontoDeRefrenciaEndereco', $_POST['pontoDeRefrenciaEndereco']);
		$venda->__set('tempoDeResidenciaEndereco', $_POST['tempoDeResidenciaEndereco']);
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
		$venda->__set('formaDePagamento', $_POST['formaDePagamento']);
		$venda->__set('produto', $_POST['produto']);
		$venda->__set('cor', $_POST['cor']);
		$venda->__set('tipoDoMetal', $_POST['tipoDoMetal']);
		$venda->__set('voltagem', $_POST['voltagem']);
		$venda->__set('numeroSerie', $_POST['numeroSerie']);
		$venda->__set('proximaTrocadeRefil', $_POST['proximaTrocadeRefil']);

		$venda->salvarVenda();


		$this->render('/painel');
	}

	public function buscaVenda()
	{

		$pesquisarPor = isset($_GET['pesquisarPor']) ? $_GET['pesquisarPor'] : '';

		echo 'Pesquisando por: ' . $pesquisarPor;

		//	$pesquisarPor = array();

		if ($pesquisarPor != '') {
			$busca = Container::getModel('Venda');
			$busca->__set('cpf', $pesquisarPor);
			$buscas = $busca->getAll();
		}
		$this->render('/painel', $buscas);
	}
}
