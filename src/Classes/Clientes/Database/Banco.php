<?php

namespace Classes\Clientes\Database;

use Classes\Clientes\Database\Conexao;
use Classes\Clientes\Interfaces\ClienteInterface;

class Banco {

    protected $pdo;

    public function __construct(Conexao $conexao)
    {
        $this->pdo = $conexao->getConexao();
    }

    public function persist(ClienteInterface $cliente)
    {
        try{
            $this->pdo->beginTransaction();

            if($cliente->isPj()){
                $sqlPj = "INSERT INTO cliente(razao_social,cnpj,estrela,status) VALUES (:razao_social,:cnpj,:estrela,:status)";
                $cStmt = $this->pdo->prepare($sqlPj);
                $cStmt->bindValue(':razao_social', $cliente->getRazaoSocial());
                $cStmt->bindValue(':cnpj', $cliente->getCnpj());
                $cStmt->bindValue(':estrela', $cliente->getStar());
                $cStmt->bindValue(':status', $cliente->getStatus());
                $cStmt->execute();
                $cliente->setId($this->pdo->lastInsertId());
            }else{
                $sqlPf = "INSERT INTO cliente (nome,sobrenome,cpf,estrela,status)  VALUES (:nome,:sobreNome,:cpf,:estrela,:status)";
                $cStmt = $this->pdo->prepare($sqlPf);
                $cStmt->bindValue(':nome',$cliente->getNome());
                $cStmt->bindValue(':sobreNome',$cliente->getSobreNome());
                $cStmt->bindValue(':cpf',$cliente->getCpf());
                $cStmt->bindValue(':estrela',$cliente->getStar());
                $cStmt->bindValue(':status',$cliente->getStatus());
                $cStmt->execute();
                $cliente->setId($this->pdo->lastInsertId());

            }

            $telefone = $cliente->getTelefone();
            $sqlTel = "INSERT INTO telefone (id_cliente,ddd,numero) VALUES (:idcliente,:ddd,:numero)";
            $tStmt = $this->pdo->prepare($sqlTel);
            $tStmt->bindValue(':idcliente', $cliente->getId());
            $tStmt->bindValue(':ddd', $telefone->getDdd());
            $tStmt->bindValue(':numero', $telefone->getNumero());
            $tStmt->execute();

            $endereco = $cliente->getEndereco();
            $sqlEnd = "INSERT INTO endereco (id_cliente,logradouro,cidade,estado,endereco_cobranca,cep) VALUES (:idcliente,:logradouro,:cidade,:estado,:enderecocobranca,:cep)";
            $eStmt = $this->pdo->prepare($sqlEnd);
            $eStmt->bindValue(':idcliente', $cliente->getId());
            $eStmt->bindValue(':logradouro', $endereco->getLogradouro());
            $eStmt->bindValue(':cidade', $endereco->getCidade());
            $eStmt->bindValue(':estado', $endereco->getEstado() );
            $eStmt->bindValue(':enderecocobranca',$endereco->getEnderecoCobranca());
            $eStmt->bindValue(':cep',$endereco->getCep());
            $eStmt->execute();

        }
        catch (\PDOException $e){
            die('Não foi possivel inserir dados no banco, mensagem de erro: '.$e->getMessage());
        }
    }

    public function flush()
    {
        try{
            $this->pdo->commit();
        }catch(\PDOException $e){
            die('Mensagem de erro :'.$e->getMessage());
        }
    }
} 