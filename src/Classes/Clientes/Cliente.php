<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 30/09/14
 * Time: 20:54
 */

namespace Classes\Clientes;


use Classes\Clientes\Interfaces\ClienteInterface;


class Cliente implements ClienteInterface {
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


} 