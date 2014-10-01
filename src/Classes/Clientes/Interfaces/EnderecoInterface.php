<?php

namespace Classes\Clientes\Interfaces;


interface EnderecoInterface {
    public function setLogradouro($logradouro);
    public function getLogradouro();
    public function setCidade($cidade);
    public function getCidade();
    public function setEstado($estado);
    public function getEstado();
    public function setCep($cep);
    public function getCep();
    public function setEnderecoCobranca($cobranca);
    public function getEnderecoCobranca();
} 