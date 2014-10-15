<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 30/09/14
 * Time: 20:42
 */

namespace Classes\Clientes;


use Classes\Clientes\Interfaces\EnderecoInterface;

class Endereco implements  EnderecoInterface {
    protected  $logradouro;
    protected  $cidade;
    protected  $estado;
    protected  $cep;
    protected  $enderecoCobranca;


    public function setCep($cep)
    {
        $this->cep = $cep;
        return $this;
    }


    public function getCep()
    {
        return $this->cep;
    }


    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }


    public function getCidade()
    {
        return $this->cidade;
    }


    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }


    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }


    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }


    public function getEstado()
    {
        return $this->estado;
    }

    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
        return $this;
    }


    public function getLogradouro()
    {
        return $this->logradouro;
    }

} 