<?php

require_once "autoload.php";

ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

use Classes\Clientes\Database\Conexao;
use Classes\Clientes\Database\Query;
use Classes\Clientes\Database\Banco;
use Classes\Clientes\Persistente\ClientePersistente;
use Classes\Clientes\Persistente\EnderecoPersistente;
use Classes\Clientes\Persistente\TelefonePersistente;

$conexao = new Conexao();
$query = new Query($conexao);

$sql = "CREATE SCHEMA IF NOT EXISTS curso DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci; use curso";

$query->insertBanco($sql);
$sql = "DROP TABLE IF EXISTS curso.cliente;DROP TABLE IF EXISTS curso.telefone;DROP TABLE IF EXISTS curso.endereco;
        CREATE TABLE curso.cliente (id_cliente INT(5) NOT NULL AUTO_INCREMENT,
                              nome VARCHAR (60),
                              sobrenome VARCHAR (60),
                              estrela INT(2) NOT NULL,
                              razao_social VARCHAR(60),
                              cpf VARCHAR (20),
                              cnpj VARCHAR (20),
                              status VARCHAR (10),
                              PRIMARY KEY(id_cliente));

        CREATE TABLE curso.telefone(id_telefone INT(5) NOT NULL AUTO_INCREMENT,
                              id_cliente INT(5),
                              ddd INT(3) NOT NULL,
                              numero INT(11) NOT NULL,
                              PRIMARY KEY (id_telefone),
                              CONSTRAINT fk_telefone_id_cliente FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente));

        CREATE TABLE curso.endereco(id_endereco INT(5) NOT NULL AUTO_INCREMENT,
                              id_cliente INT(5),
                              logradouro VARCHAR (100) NOT NULL,
                              cidade VARCHAR (50) NOT NULL,
                              estado VARCHAR (30) NOT NULL,
                              endereco_cobranca VARCHAR (100),
                              cep VARCHAR (12),
                              PRIMARY KEY (id_endereco),
                              CONSTRAINT fk_endereco_id_cliente FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente));
";
$query->insertBanco($sql);

$cPersiste = new ClientePersistente();
$ePersiste = new EnderecoPersistente();
$tPersiste = new TelefonePersistente();
$banco = new Banco($conexao);

$cliente1 = $cPersiste->insertPj('Teste LTDA','0000-00000','3','ativo')
                      ->addEndereco($ePersiste->insertEndereco('rua 1, numero 73','rua 2, numero 32','São Paulo','sp',"00000-000"))
                      ->addTelefone($tPersiste->insertTelefone('11','38683868'));


$banco->persist($cliente1);
$banco->flush();


$cliente2 = $cPersiste->insertPf('Joao','Silva','33333333333','5','ativo')
                      ->addEndereco($ePersiste->insertEndereco('rua 3, numero 3','rua 4, numero 4','Itapevi','sp','111111-111'))
                      ->addTelefone($tPersiste->insertTelefone('11','62623333'));

$banco->persist($cliente2);
$banco->flush();

$cliente3 = $cPersiste->insertPf('Maria','Luiza','44444444444','0','inativo')
    ->addEndereco($ePersiste->insertEndereco('rua 5, numero 5','rua 6, numero 5','Barueri','sp','55555-555'))
    ->addTelefone($tPersiste->insertTelefone('12','21212121'));

$banco->persist($cliente3);
$banco->flush();

$cliente3 = $cPersiste->insertPj('Ads Informatica','1111-11111','5','ativo')
    ->addEndereco($ePersiste->insertEndereco('rua 7, numero 7','rua 8, numero 8','Osasco','sp','33333333333'))
    ->addTelefone($tPersiste->insertTelefone('11','52525225'));

$banco->persist($cliente3);
$banco->flush();

echo "Database criado";
