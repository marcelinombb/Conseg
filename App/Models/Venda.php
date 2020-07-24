<?php

    namespace App\Models;

    use MF\Model\Model;
    use \PDO;
    
     class Venda extends Model {

       private $id_venda;
       private $nome;
       private $nacionalidade;
       private $idade;
       private $dataDeNascimentoDadosPessoais;
       private $rg;
       private $cpf;
       private $dataDeExpedicao;  
       private $ruaEndereco;
       private $cepEndereco;
       private $cidadeEndereco;
       private $estadoEndereco;
       private $escolaridadeEndereco;
       private $paiEndereco;
       private $maeEndereco;
       private $nomeDoConjeEndereco;
       private $dataDeNascimentoEndereco;
       private $telefoneEndereco;
       private $telefoneCelular;
       private $pontoDeRefrenciaEndereco;
       private $tempoDeResidenciaEndereco;
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
       private $formaDePagamento;
       private $produto;
       private $cor;
       private $tipoDoMetal;
       private $voltagem;
       private $numeroSerie;  
       private $proximaTrocadeRefil;  
       //43
       public function __get($atributo){
         return $this->$atributo;
       
        }

      public function __set($atributo, $valor){
        $this->$atributo = $valor;
        
      }

      public function salvarVenda() {

        $query = "INSERT INTO venda
                (id_venda,
                 nome,
                 nacionalidade,
                 idade,
                 data_nascimento_dados_pessoais,
                 rg,
                 cpf,
                 data_de_expedicao,
                 rua_endereco,
                 cep_endereco,
                 cidade_endereco,
                 estado_endereco,
                 escolaridade_endereco,
                 pai_endereco,
                 mae_endereco,
                 nome_do_conje_endereco,
                 data_de_nascimento_endereco,
                 telefone_endereco,
                 telefone_celular,
                 ponto_refrencia_endereco,
                 tempo_residencia_endereco, 
                 tipo_residencia,
                 ocupacao_atividade,
                 empresa_atividade,
                 inicio_atividade,
                 telefone_empresa_atividade,
                 endereco_empresa,
                 salario,
                 outras_rendas,
                 primeira_referencia,
                 segunda_referencia,
                 primeiro_telefone,
                 segundo_telefone, 
                 email_cliente,
                 vendedor, 
                 lider, 
                 data_venda, 
                 forma_pagamento, 
                 produto,	
                 cor, 
                 tipo_metal,
                 voltagem, 
                 numeroSerie, 
                 proximaTrocadeRefil)
                 VALUES
                (:id_venda,
                 :nome, 
                 :nacionalidade, 
                 :idade,
                 :dataDeNascimentoDadosPessoais,
                 :rg,
                 :cpf, 
                 :dataDeExpedicao, 
                 :ruaEndereco,
                 :cepEndereco, 
                 :cidadeEndereco, 
                 :estadoEndereco, 
                 :escolaridadeEndereco, 
                 :paiEndereco, 
                 :maeEndereco, 
                 :nomeDoConjeEndereco, 
                 :dataDeNascimentoEndereco, 
                 :telefoneEndereco,
                 :telefoneCelular, 
                 :pontoDeRefrenciaEndereco, 
                 :tempoDeResidenciaEndereco, 
                 :tipoResidencia, 
                 :ocupacaoAtividade, 
                 :empresaAtividade, 
                 :inicioAtividade, 
                 :telefoneDaEmpresaAtividade,
                 :enderecoDaEmpresa, 
                 :salario, 
                 :outrasRendas, 
                 :primeiraReferencia, 
                 :segundaReferencia, 
                 :primeiroTelefone, 
                 :segundoTelefone, 
                 :emailCliente, 
                 :vendedor, 
                 :lider, 
                 :dataDaVenda,
                 :formaDePagamento, 
                 :produto, 
                 :cor, 
                 :tipoDoMetal, 
                 :voltagem, 
                 :numeroSerie, 
                 :proximaTrocadeRefil)";
        
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id_venda', $this->__get('id_venda'), PDO::PARAM_INT);
        $stmt->bindValue(':nome', $this->__get('nome'), PDO::PARAM_STR);
        $stmt->bindValue(':nacionalidade', $this->__get('nacionalidade'), PDO::PARAM_STR);
        $stmt->bindValue(':idade', $this->__get('idade'), PDO::PARAM_STR);
        $stmt->bindValue(':dataDeNascimentoDadosPessoais', $this->__get('dataDeNascimentoDadosPessoais'), PDO::PARAM_STR);
        $stmt->bindValue(':rg', $this->__get('rg'), PDO::PARAM_STR);
        $stmt->bindValue(':cpf', $this->__get('cpf'), PDO::PARAM_STR);	
        $stmt->bindValue(':dataDeExpedicao', $this->__get('dataDeExpedicao'), PDO::PARAM_STR);
        $stmt->bindValue(':ruaEndereco', $this->__get('ruaEndereco'), PDO::PARAM_STR);
        $stmt->bindValue(':cepEndereco', $this->__get('cepEndereco'), PDO::PARAM_STR);
        $stmt->bindValue(':cidadeEndereco', $this->__get('cidadeEndereco'), PDO::PARAM_STR);	
        $stmt->bindValue(':estadoEndereco', $this->__get('estadoEndereco'), PDO::PARAM_STR);
        $stmt->bindValue(':escolaridadeEndereco', $this->__get('escolaridadeEndereco'), PDO::PARAM_STR);
        $stmt->bindValue(':paiEndereco', $this->__get('paiEndereco'), PDO::PARAM_STR);	
        $stmt->bindValue(':maeEndereco', $this->__get('maeEndereco'), PDO::PARAM_STR);
        $stmt->bindValue(':nomeDoConjeEndereco', $this->__get('nomeDoConjeEndereco'), PDO::PARAM_STR);	
        $stmt->bindValue(':dataDeNascimentoEndereco', $this->__get('dataDeNascimentoEndereco'), PDO::PARAM_STR);        
        $stmt->bindValue(':telefoneEndereco', $this->__get('telefoneEndereco'), PDO::PARAM_STR);	
        $stmt->bindValue(':telefoneCelular', $this->__get('telefoneCelular'), PDO::PARAM_STR);
        $stmt->bindValue(':pontoDeRefrenciaEndereco', $this->__get('pontoDeRefrenciaEndereco'), PDO::PARAM_STR);	
        $stmt->bindValue(':tempoDeResidenciaEndereco', $this->__get('tempoDeResidenciaEndereco'), PDO::PARAM_STR);
        $stmt->bindValue(':tipoResidencia', $this->__get('tempoDeResidenciaEndereco'), PDO::PARAM_STR);
        $stmt->bindValue(':ocupacaoAtividade', $this->__get('tempoDeResidenciaEndereco'), PDO::PARAM_STR);
        $stmt->bindValue(':empresaAtividade', $this->__get('empresaAtividade'), PDO::PARAM_STR);	
        $stmt->bindValue(':inicioAtividade', $this->__get('inicioAtividade'), PDO::PARAM_STR);
        $stmt->bindValue(':telefoneDaEmpresaAtividade', $this->__get('telefoneDaEmpresaAtividade'), PDO::PARAM_STR);
        $stmt->bindValue(':enderecoDaEmpresa', $this->__get('enderecoDaEmpresa'), PDO::PARAM_STR);	
        $stmt->bindValue(':salario', $this->__get('salario'), PDO::PARAM_STR);	
        $stmt->bindValue(':outrasRendas', $this->__get('outrasRendas'), PDO::PARAM_STR);
        $stmt->bindValue(':primeiraReferencia', $this->__get('primeiraReferencia'), PDO::PARAM_STR);	
        $stmt->bindValue(':segundaReferencia', $this->__get('segundaReferencia'), PDO::PARAM_STR);
        $stmt->bindValue(':primeiroTelefone', $this->__get('primeiroTelefone'), PDO::PARAM_STR);	
        $stmt->bindValue(':segundoTelefone', $this->__get('segundoTelefone'), PDO::PARAM_STR);
        $stmt->bindValue(':emailCliente', $this->__get('emailCliente'), PDO::PARAM_STR);	
        $stmt->bindValue(':vendedor', $this->__get('vendedor'), PDO::PARAM_STR);
        $stmt->bindValue(':lider', $this->__get('lider'), PDO::PARAM_STR);	
        $stmt->bindValue(':dataDaVenda', $this->__get('dataDaVenda'), PDO::PARAM_STR);
        $stmt->bindValue(':formaDePagamento', $this->__get('formaDePagamento'), PDO::PARAM_STR);	
        $stmt->bindValue(':produto', $this->__get('produto'), PDO::PARAM_STR);
        $stmt->bindValue(':cor', $this->__get('cor'), PDO::PARAM_STR);	
        $stmt->bindValue(':tipoDoMetal', $this->__get('tipoDoMetal'), PDO::PARAM_STR);
        $stmt->bindValue(':voltagem', $this->__get('voltagem'), PDO::PARAM_STR);	
        $stmt->bindValue(':numeroSerie', $this->__get('numeroSerie'), PDO::PARAM_STR);
        $stmt->bindValue(':proximaTrocadeRefil', $this->__get('proximaTrocadeRefil'), PDO::PARAM_STR);

        $stmt->execute();
        
        return $this;
   
      }

      public function getAll() {
        $query = "select nome, telefone, endereco, proximaTrocadeRefil from venda where cpf = :cpf";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':cpf', $this->__get('cpf'));
     
        $stmt->execute();
    
        return $stmt->fetch(\PDO::FETCH_ASSOC);

        var_dump($stmt);
      }
    }