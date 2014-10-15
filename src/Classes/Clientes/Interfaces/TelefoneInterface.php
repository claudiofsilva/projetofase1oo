<?php


namespace Classes\Clientes\Interfaces;


interface TelefoneInterface {
          public function setDdd($ddd);
          public function getDdd();
          public function setNumero($numero);
          public function getNumero();
} 