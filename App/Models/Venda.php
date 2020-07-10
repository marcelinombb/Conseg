<?php

    namespace App\Model;

    use MF\Model\Model;
    
     class Venda extends Model {

       private $nome;
       private $sobrenome;
       private $dataDeNascimentoDadosPessoais;
       private $rg;
       private $cpf;
       private $dataDeExpedicao;
       private $cidadeEndereco;
       private $estadoEndereço;
       private $escolaridadeEndereco;
       private $paiEndereco;
       private $maeEndereco;
       private $nomeDoConjeEndereco;
       private $dataDeNascimentoEndereco;
       private $cidadeAtividadesExercidas;
       //private $estadoAtividadesExercidas;
       private $escolaridade;
       private $pai;
       private $mae;
       private $nomeDoConje;
       private $dataDeNascimento;
       private $rua;
       private $numero;
       private $cepAtividadesExercidas;
       private $bairro;
       private $cidadAtividadesExercidas;
       private $estadoAtividadesExercidas;
       private $telefone;
       private $celular;
       private $pontoDeRefrencia;
       private $tempoDeResidencia;
       private $residencia;
       private $ocupacao;
       private $empresa;
       private $inicio;
       private $enderecoDaEmpresa;
       private $cep;
       private $telefoneDaEmpresa;
       private $cidade;
       private $estado;
       private $salario;
       private $outrasRendas;
       private $primeiraReferencia;
       private $primeiroTelefone;
       private $segundaReferencia;
       private $segundoTelefone;
       private $emailCliente;
       private $vendedor;
       private $lider;
       private $dataDaVenda;
       private $produto;
       private $cor;
       private $tipoDoMetal;
       private $voltagem;
       private $numeroSerie;
       private $proximaTrocadeRefil;
       private $formadePagamento;

       public function __get($atributo){
         return $this->$atributo;
       
        }

      public function __set($atributo, $valor){
        $this->$atributo = $valor;
        
      }

      public function salvarVenda() {

        $query ="insert in to vendas(id_venda, nome, sobrenome, dataDeNascimentoDadosPessoais, rg, cpf, dataDeExpedicao, cidadeEndereco, estadoEndereço, escolaridadeEndereco, paiEndereco, maeEndereco, nomeDoConjeEndereco,
        dataDeNascimentoEndereco, cidadeAtividadesExercidas, escolaridade, pai, mae, nomeDoConje, dataDeNascimento, rua, numero, cepAtividadesExercidas, bairro, cidadAtividadesExercidas, estadoAtividadesExercidas, telefone,
        celular, pontoDeRefrencia, tempoDeResidencia, residencia, ocupacao, empresa, inicio, enderecoDaEmpresa, cep, telefoneDaEmpresa, cidade, estado, salario, outrasRendas, primeiraReferencia,  primeiroTelefone, segundaReferencia
        segundoTelefone, emailCliente, vendedor, lider, dataDaVenda, produto, cor, tipoDoMetal, voltagem, numeroSerie, proximaTrocadeRefil, formadePagamento)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id_venda', $this->__get('id_venda'));
        $stmt->bindValue(':nome', $this->__get('nome'));
        $stmt->bindValue(':sobrenome', $this->__get('sobrenome'));
        $stmt->bindValue(':dataDeNascimentoDadosPessoais', $this->__get('dataDeNascimentoDadosPessoais'));
        $stmt->bindValue(':rg', $this->__get('rg'));
        $stmt->bindValue(':cpf', $this->__get('cpf'));	
        $stmt->bindValue(':dataDeExpedicao', $this->__get('dataDeExpedicao'));
        $stmt->bindValue(':cidadeEndereco', $this->__get('cidadeEndereco'));	
        $stmt->bindValue(':estadoEndereço', $this->__get('estadoEndereço'));
        $stmt->bindValue(':escolaridadeEndereco', $this->__get('escolaridadeEndereco'));	
        $stmt->bindValue(':paiEndereco', $this->__get('paiEndereco'));
        $stmt->bindValue(':maeEndereco', $this->__get('maeEndereco'));
        $stmt->bindValue(':nomeDoConjeEndereco', $this->__get('nomeDoConjeEndereco'));	
        $stmt->bindValue(':dataDeNascimentoEndereco', $this->__get('dataDeNascimentoEndereco'));
        $stmt->bindValue(':cidadeAtividadesExercidas', $this->__get('cidadeAtividadesExercidas'));	
        $stmt->bindValue(':estadoAtividadesExercidas', $this->__get('estadoAtividadesExercidas'));
        $stmt->bindValue(':telefone', $this->__get('telefone'));	
        $stmt->bindValue(':celular', $this->__get('celular'));
        $stmt->bindValue(':pontoDeRefrencia', $this->__get('pontoDeRefrencia'));	
        $stmt->bindValue(':pontoDeRefrencia', $this->__get('pontoDeRefrencia'));
        $stmt->bindValue(':tempoDeResidencia', $this->__get('tempoDeResidencia'));	
        $stmt->bindValue(':residencia', $this->__get('residencia'));
        $stmt->bindValue(':ocupacao', $this->__get('ocupacao'));	
        $stmt->bindValue(':empresa', $this->__get('empresa'));
        $stmt->bindValue(':inicio', $this->__get('enderecoDaEmpresa'));	
        $stmt->bindValue(':cep', $this->__get('cep'));
        $stmt->bindValue(':telefoneDaEmpresa', $this->__get('telefone'));	
        $stmt->bindValue(':cidade', $this->__get('cidade'));
        $stmt->bindValue(':estado', $this->__get('estado'));	
        $stmt->bindValue(':salario', $this->__get('salario'));
        $stmt->bindValue(':outrasRendas', $this->__get('outrasRendas'));	
        $stmt->bindValue(':primeiraReferencia', $this->__get('primeiraReferencia'));
        $stmt->bindValue(':primeiroTelefone', $this->__get('primeiroTelefone'));	
        $stmt->bindValue(':segundaReferencia', $this->__get('segundaReferencia'));
        $stmt->bindValue(':segundoTelefone', $this->__get('segundoTelefone'));	
        $stmt->bindValue(':emailCliente', $this->__get('emailCliente'));
        $stmt->bindValue(':vendedor', $this->__get('vendedor'));	
        $stmt->bindValue(':lider', $this->__get('lider'));
        $stmt->bindValue(':dataDaVenda', $this->__get('dataDaVenda'));	
        $stmt->bindValue(':produto', $this->__get('produto'));
        $stmt->bindValue(':cor', $this->__get('cor'));	
        $stmt->bindValue(':tipoDoMetal', $this->__get('tipoDoMetal'));
        $stmt->bindValue(':numeroSerie', $this->__get('numeroSerie'));	
        $stmt->bindValue(':voltagem', $this->__get('voltagem'));
        $stmt->bindValue(':numeroSerie', $this->__get('numeroSerie'));	
        $stmt->bindValue(':proximaTrocadeRefil', $this->__get('proximaTrocadeRefil'));
        $stmt->bindValue(':formadePagamento', $this->__get('formadePagamento'));	
  

        $stmt->execute();

    }