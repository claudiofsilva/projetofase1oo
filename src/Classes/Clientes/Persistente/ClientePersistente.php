<?php

namespace Classes\Clientes\Persistente;

use Classes\Clientes\PessoaFisica;
use Classes\Clientes\PessoaJuridica;


class ClientePersistente {

     public function insertPj($razaoSocial,$cnpj,$star,$status)
     {
         $pj = new PessoaJuridica();
         $pj->setRazaoSocial($razaoSocial)
            ->setCnpj($cnpj)
            ->setStar($star)
            ->setStatus($status);

         return $pj;
     }

    public function insertPf($nome,$sobreNome,$cpf,$star,$status)
    {
        $pf = new PessoaFisica();
        $pf->setNome($nome)
           ->setSobreNome($sobreNome)
           ->setCpf($cpf)
           ->setStar($star)
           ->setStatus($status);

        return $pf;
    }

} 