<?php


namespace Classes\Clientes\Interfaces;
use Classes\Clientes\Endereco;
use Classes\Clientes\Telefone;

interface ClienteInterface {

    public function isPj();
    public function setStar($star);
    public function getStar();
    public function addEndereco(Endereco $endereco);
    public function addTelefone(Telefone $telefone);
    public function setStatus($status);
    public function getStatus();
} 