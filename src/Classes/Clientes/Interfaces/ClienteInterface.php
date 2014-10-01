<?php


namespace Classes\Clientes\Interfaces;


interface ClienteInterface {
    public function setNome($nome);
    public function getNome();
    public function setTelefone($telefone);
    public function getTelefone();
} 