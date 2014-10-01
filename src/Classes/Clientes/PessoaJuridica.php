<?php

namespace Classes\Clientes;


use Classes\Clientes\Interfaces\PessoaJuridicaInterface;

class PessoaJuridica implements PessoaJuridicaInterface {

    protected $tipo;
    protected $cnpj;
    public $star = 1;

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


    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }


    public function getTipo()
    {
        return $this->tipo;
    }


} 