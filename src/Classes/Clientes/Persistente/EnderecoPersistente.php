<?php

namespace Classes\Clientes\Persistente;

use Classes\Clientes\Endereco;
use Classes\Clientes\Interfaces\ClienteInterface;


class EnderecoPersistente {

    public function insertEndereco($logradouro,$enderecoCobranca = null,$cidade,$estado,$cep)
    {
        $endereco = new Endereco();
        $endereco->setLogradouro($logradouro)
                 ->setEnderecoCobranca($enderecoCobranca)
                 ->setCidade($cidade)
                 ->setEstado($estado)
                 ->setCep($cep);

        return $endereco;
    }
} 