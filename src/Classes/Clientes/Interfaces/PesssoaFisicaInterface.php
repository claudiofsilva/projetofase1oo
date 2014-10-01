<?php

namespace Classes\Clientes\Interfaces;


interface PesssoaFisicaInterface {
    public function setTipo($tipo);
    public function getTipo();
    public function setCpf($cnpj);
    public function getCpf();
    public function setStar($star);
    public function getStar();
} 