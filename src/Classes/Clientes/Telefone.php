<?php

namespace Classes\Clientes;

use Classes\Clientes\Interfaces\TelefoneInterface;

class Telefone implements TelefoneInterface{
    public $ddd;
    public $numero;


    public function setDdd($ddd)
    {
        $this->ddd = $ddd;
        return $this;
    }


    public function getDdd()
    {
        return $this->ddd;
    }


    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }


    public function getNumero()
    {
        return $this->numero;
    }

} 