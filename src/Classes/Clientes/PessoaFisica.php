<?php

namespace Classes\Clientes;


use Classes\Clientes\Interfaces\ClienteInterface;



class PessoaFisica implements ClienteInterface {

    protected $cpf;
    protected $star = 1;
    protected $telefone;
    protected $endereco;
    protected $id;
    protected $nome;
    protected $sobreNome;
    protected $status;


    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }


    public function getStatus()
    {
        return $this->status;
    }


    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }


    public function getNome()
    {
        return $this->nome;
    }


    public function setSobreNome($sobreNome)
    {
        $this->sobreNome = $sobreNome;
        return $this;
    }


    public function getSobreNome()
    {
        return $this->sobreNome;
    }


    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }


    public function getCpf()
    {
        return $this->cpf;
    }


    public function setStar($star)
    {
        if($star < 1){
            $this->star = 1;
        }elseif($star > 5){
            $this->star = 5;
        }else{
            $this->star = $star;
        }
        return $this;
    }

    public function getStar()
    {
        return $this->star;
    }


    public function isPj()
    {
        return false;
    }

    public function addEndereco(Endereco $endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function addTelefone(Telefone $telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

} 