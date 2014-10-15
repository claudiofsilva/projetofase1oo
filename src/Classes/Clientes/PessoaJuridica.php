<?php

namespace Classes\Clientes;


use Classes\Clientes\Interfaces\ClienteInterface;



class PessoaJuridica implements ClienteInterface {

    protected $cnpj;
    public $star = 1;
    protected $telefone;
    protected $endereco;
    protected $id;
    protected $razaoSocial;
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


    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }


    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }


    public function getCnpj()
    {
        return $this->cnpj;
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

    public function addEndereco(Endereco $endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function addTelefone(Telefone $telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function isPj()
    {
        return true;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
} 