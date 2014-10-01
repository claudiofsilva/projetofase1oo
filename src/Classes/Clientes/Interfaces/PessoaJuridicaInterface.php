<?php

namespace Classes\Clientes\Interfaces;


interface PessoaJuridicaInterface {
    public function setTipo($tipo);
    public function getTipo();
    public function setCnpj($cnpj);
    public function getCnpj();
    public function setStar($star);
    public function getStar();
} 