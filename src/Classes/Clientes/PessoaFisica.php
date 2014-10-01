<?php

namespace Classes\Clientes;


use Classes\Clientes\Interfaces\PesssoaFisicaInterface;

class PessoaFisica implements PesssoaFisicaInterface {
    protected $tipo;
    protected $cpf;
    public $star = 1;


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