<?php

namespace Classes\Clientes\Abstrato;

use Classes\Clientes\Interfaces\ClienteInterface;


abstract class ClienteAbstract implements ClienteInterface {
    protected $nome;
    protected $telefone;


    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }


    public function getTelefone()
    {
        return $this->telefone;
    }

    abstract public function setStatus($status);

    abstract public function getStatus();

} 