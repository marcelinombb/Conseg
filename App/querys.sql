create database conseg;

use conseg;

create table usuarios(
	id int not null primary key AUTO_INCREMENT,
	nome varchar(100) not null,
	email varchar(150) not null,
	senha varchar(32) not null
);

create table venda(
	id int not null primary key AUTO_INCREMENT,
	nome varchar(100) not null,
	sobrenome varchar(150) not null,
	idade varchar(32) not null
        nome varchar(32) not null;
       sobrenome;
       dataDeNascimentoDadosPessoais;
       rg;
       cpf;
       dataDeExpedicao;
       cidadeEndereco;
       estadoEndereço;
       escolaridadeEndereco;
       paiEndereco;
       maeEndereco;
       nomeDoConjeEndereco;
       dataDeNascimentoEndereco;
       cidadeAtividadesExercidas;
       estadoAtividadesExercidas;
       escolaridade;
       pai;
       mae;
       nomeDoConje;
        dataDeNascimento;
       rua;
       numero;
       cepAtividadesExercidas;
       bairro;
       cidadAtividadesExercidas;
       estadoAtividadesExercidas;
       telefone;
       celular;
       pontoDeRefrencia;
       tempoDeResidencia;
        residencia;
       ocupacao;
       empresa;
       inicio;
       enderecoDaEmpresa;
       cep;
       telefoneDaEmpresa;
       cidade;
       estado;
       salario;
       outrasRendas;
      primeiraReferencia;
     primeiroTelefone;
     segundaReferencia;
      segundoTelefone;
    emailCliente;
       vendedor;
       lider;
       dataDaVenda;
       produto;
    cor;
     tipoDoMetal;
       voltagem;
     numeroSerie;
      proximaTrocadeRefil;
       formadePagamento;
);