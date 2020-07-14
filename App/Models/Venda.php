<?php

    namespace App\Model;

    use MF\Model\Model;
    
     class Venda extends Model {

       private $id_venda;
       private $nome;
       private $sobrenome;
       private $idade;
       private $dataDeNascimentoDadosPessoais;
       private $rg;
       private $cpf;
       private $dataDeExpedicao;
       private $ruaEndereço;
       private $cepEndereço;
       private $cidadeEndereco;
       private $estadoEndereço;
       private $escolaridadeEndereco;
       private $paiEndereco;
       private $maeEndereco;
       private $nomeDoConjeEndereco;
       private $dataDeNascimentoEndereco;
       private $telefoneEndereço;
       private $telefoneCelular;
       private $pontoDeRefrenciaEndereço;
       private $tempoDeResidenciaEndereço;
       private $tipoResidencia;
       private $ocupacaoAtividade;
       private $empresaAtividade;
       private $inicioAtividade;
       private $telefoneDaEmpresaAtividade;
       private $enderecoDaEmpresa;
       private $salario;
       private $outrasRendas;
       private $primeiraReferencia;
       private $segundaReferencia;
       private $primeiroTelefone;
       private $segundoTelefone;
       private $emailCliente;
       private $vendedor;
       private $lider;
       private $dataDaVenda;
       private $formadePagamento;
       private $produto;
       private $cor;
       private $tipoDoMetal;
       private $voltagem;
       private $numeroSerie;
       private $proximaTrocadeRefil;
       
       public function __get($atributo){
         return $this->$atributo;
       
        }

      public function __set($atributo, $valor){
        $this->$atributo = $valor;
        
      }

      public function salvarVenda() {

        $query ="insert in to vendas(id_venda, nome, sobrenome, dataDeNascimentoDadosPessoais, rg, cpf, dataDeExpedicao, ruaEndereço, cepEndereço, cidadeEndereco, estadoEndereco, escolaridadeEndereco, paiEndereco, maeEndereco, nomeDoConjeEndereco,
        dataDeNascimentoEndereco, telefoneEndereço, telefoneCelular, pontoDeRefrenciaEndereço, tempoDeResidenciaEndereço, ocupacaoAtividade, empresaAtividade, inicioAtividade, telefoneDaEmpresaAtividade, enderecoDaEmpresa, salario,
        outrasRendas, primeiraReferencia, segundaReferencia, primeiroTelefone, segundoTelefone, emailCliente, vendedor, lider, dataDaVenda, formaPagamento, produto, cor, tipoDoMetal, voltagem, proximaTrocadeRefil)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id_venda', $this->__get('id_venda'));
        $stmt->bindValue(':nome', $this->__get('nome'));
        $stmt->bindValue(':sobrenome', $this->__get('sobrenome'));
        $stmt->bindValue(':dataDeNascimentoDadosPessoais', $this->__get('dataDeNascimentoDadosPessoais'));
        $stmt->bindValue(':rg', $this->__get('rg'));
        $stmt->bindValue(':cpf', $this->__get('cpf'));	
        $stmt->bindValue(':dataDeExpedicao', $this->__get('dataDeExpedicao'));
        $stmt->bindValue(':ruaEndereco', $this->__get('ruaEndereço'));
        $stmt->bindValue(':cepEndereco', $this->__get('cepEndereço'));
        $stmt->bindValue(':cidadeEndereco', $this->__get('cidadeEndereco'));	
        $stmt->bindValue(':estadoEndereco', $this->__get('estadoEndereco'));
        $stmt->bindValue(':escolaridadeEndereco', $this->__get('escolaridadeEndereco'));
        $stmt->bindValue(':paiEndereco', $this->__get('paiEndereco'));	
        $stmt->bindValue(':maeEndereco', $this->__get('maeEndereco'));
        $stmt->bindValue(':nomeDoConjeEndereco', $this->__get('nomeDoConjeEndereco'));	
        $stmt->bindValue(':dataDeNascimentoEndereco', $this->__get('dataDeNascimentoEndereco'));
        $stmt->bindValue(':telefoneEndereço', $this->__get('telefoneEndereço'));	
        $stmt->bindValue(':telefoneCelular', $this->__get('telefoneCelular'));
        $stmt->bindValue(':pontoDeRefrenciaEndereço', $this->__get('pontoDeRefrenciaEndereço'));	
        $stmt->bindValue(':tempoDeResidenciaEndereço', $this->__get('tempoDeResidenciaEndereço'));
        $stmt->bindValue(':empresaAtividade', $this->__get('empresaAtividade'));	
        $stmt->bindValue(':inicioAtividade', $this->__get('inicioAtividade'));
        $stmt->bindValue(':telefoneDaEmpresaAtividade', $this->__get('telefoneDaEmpresaAtividade'));	
        $stmt->bindValue(':enderecoDaEmpresa', $this->__get('enderecoDaEmpresa'));
        $stmt->bindValue(':salario', $this->__get('salario'));	
        $stmt->bindValue(':outrasRendas', $this->__get('outrasRendas'));
        $stmt->bindValue(':primeiraReferencia', $this->__get('primeiraReferencia'));	
        $stmt->bindValue(':segundaReferencia', $this->__get('segundaReferencia'));
        $stmt->bindValue(':primeiroTelefone', $this->__get('primeiroTelefone'));	
        $stmt->bindValue(':segundoTelefone', $this->__get('segundoTelefone'));
        $stmt->bindValue(':emailCliente', $this->__get('emailCliente'));	
        $stmt->bindValue(':vendedor', $this->__get('vendedor'));
        $stmt->bindValue(':lider', $this->__get('lider'));	
        $stmt->bindValue(':dataDaVenda', $this->__get('dataDaVenda'));
        $stmt->bindValue(':formadePagamentoCartao', $this->__get('formadePagamentoCartao'));	
        $stmt->bindValue(':produto', $this->__get('produto'));
        $stmt->bindValue(':cor', $this->__get('cor'));	
        $stmt->bindValue(':tipoDoMetal', $this->__get('tipoDoMetal'));
        $stmt->bindValue(':voltagem', $this->__get('voltagem'));	
        $stmt->bindValue(':proximaTrocadeRefil', $this->__get('proximaTrocadeRefil'));
        
        $stmt->execute();

    }