<?php

class Cliente
{
    protected $nome;
    protected $cpf;
    protected $endereco;
    protected $cidade;

   
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }


    public function getCidade()
    {
        return $this->cidade;
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


    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }


    public function getEndereco()
    {
        return $this->endereco;
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

} 