<?php

namespace Classes\Clientes\Database;

use Classes\Clientes\Database\Conexao;

class Query {
    private $con;

    public function __construct(Conexao $conexao){
          $this->con = $conexao->getConexao();
    }

    public function insertBanco($sql){
            $stmt = $this->con->prepare($sql);

            try{
                if($stmt->execute()){
                   return true;
                }
            }catch (\PDOException $e)
            {
                die('Não foi possivel criar banco de dados, mensagem de erro: '.$e->getMessage());
            }

    }

    public function listaClientes(){

        try{
            $sqlClientes = "SELECT c.id_cliente, c.nome, c.sobrenome, c.razao_social, c.cpf, c.estrela, c.cnpj , t.ddd, t.numero, e.logradouro, e.endereco_cobranca, e.cidade, e.estado, e.cep FROM curso.cliente c
                INNER JOIN curso.telefone t ON c.id_cliente = t.id_cliente
                INNER JOIN curso.endereco e ON c.id_cliente = e.id_cliente";

            $clientes = $this->con->query($sqlClientes);
            $arrClientes = $clientes->fetchAll(\PDO::FETCH_ASSOC);
            return $arrClientes;

        }catch (\PDOException $e){
            die('Não foi possivel efetuar a listagem de clientes, mensagem de erro: '.$e->getMessage());
        }
    }
} 