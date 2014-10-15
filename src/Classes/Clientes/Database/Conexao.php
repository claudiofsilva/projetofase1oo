<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 09/10/14
 * Time: 21:10
 */

namespace Classes\Clientes\Database;
use Classes\Clientes\Database\Config;

class Conexao {
    private $pdo;
    private $dns;
    private $host;
    private $user;
    private $password;

    public function __construct(){

        $config = Config::configuracaoBanco();

        if(isset($config['db'])){
            $this->dns = $config['db']['dsn'];
            $this->host = $config['db']['host'];
            $this->user = $config['db']['user'];
            $this->password = $config['db']['password'];
        }
    }

    public function getConexao()
    {

       if(!$this->pdo instanceof \PDO){

           try{
               $this->pdo = new \PDO("{$this->dns}:host={$this->host}",$this->user,$this->password);
           }catch (\PDOException $e){
               die('Mensagem de erro: '.$e->getMessage());
           }
       }

        return $this->pdo;
    }

}