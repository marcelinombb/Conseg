create database conseg;

use conseg;

create table usuarios(
	id int not null primary key AUTO_INCREMENT,
	nome varchar(100) not null,
	email varchar(150) not null,
	senha varchar(32) not null
);

create table venda(
	id_venda int not null primary key AUTO_INCREMENT,
	nome varchar(32) not null,
	sobrenome varchar(32) not null,
	idade varchar(32) not null
  nome varchar(32) not null;
  sobrenome varchar(32) not null;
  dataDeNascimentoDadosPessoais varchar(32) not null;
  rg varchar(32) not null;
  cpf varchar(32) not null;
  dataDeExpedicao varchar(32) not null;
  cidadeEndereco varchar(32) not null;
  estadoEndereço varchar(32) not null;
  escolaridade Endereco varchar(32) not null;
  paiEndereco varchar(32) not null;
  maeEndereco varchar(32) not null;
  nomeDoConjeEndereco varchar(32) not null;
  dataDeNascimentoEndereco varchar(32) not null;
  cidadeAtividadesExercidas varchar(32) not null;
  estadoAtividadesExercidas varchar(32) not null;
  escolaridade varchar(32) not null;
  pai varchar(32) not null;
  mae varchar(32) not null;
  nomeDoConje varchar(32) not null;
  dataDeNascimento varchar(32) not null;
  rua varchar(32) not null; 
  numero varchar(32) not null;
  cepAtividadesExercidas varchar(32) not null;
  bairro varchar(32) not null;
  cidadAtividadesExercidas varchar(32) not null;
  estadoAtividadesExercidas varchar(32) not null;
  telefone varchar(32) not null;
  celular varchar(32) not null;
  pontoDeRefrencia varchar(32) not null;
  tempoDeResidencia varchar(32) not null;
  residencia varchar(32) not null;
  ocupacao varchar(32) not null;
  empresa varchar(32) not null;
  inicio varchar(32) not null;
  enderecoDaEmpresa varchar(32) not null;
  cep varchar(32) not null;
  telefoneDaEmpresa varchar(32) not null;
  cidade varchar(32) not null;
  estado varchar(32) not null;
  salario varchar(32) not null;
  outrasRendas varchar(32) not null;
  primeiraReferencia varchar(32) not null;
  primeiroTelefone varchar(32) not null;
  segundaReferencia varchar(32) not null;
  segundoTelefone varchar(32) not null;
  emailCliente varchar(32) not null;
  vendedor varchar(32) not null;
  lider varchar(32) not null;
  dataDaVenda varchar(32) not null;
  produto varchar(32) not null;
  cor varchar(32) not null;
  tipoDoMetal varchar(32) not null;
  voltagem varchar(32) not null;
  numeroSerie varchar(32) not null;
  proximaTrocadeRefil varchar(32) not null;
  formadePagamento varchar(32) not null;
);