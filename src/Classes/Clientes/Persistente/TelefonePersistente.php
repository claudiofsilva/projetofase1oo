<?php


namespace Classes\Clientes\Persistente;

use Classes\Clientes\Interfaces\ClienteInterface;
use Classes\Clientes\Telefone;


class TelefonePersistente {

    public function insertTelefone($ddd,$numero)
    {
        $telefone = new Telefone();
        $telefone->setDdd($ddd)
                 ->setNumero($numero);

        return $telefone;
    }
} 