<?php


namespace Classes\Clientes;

use Classes\Clientes\Abstrato\ClienteAbstract;


class Cliente extends ClienteAbstract {
    protected $status;


    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }


    public function getStatus()
    {
        return $this->status;
    }
} 