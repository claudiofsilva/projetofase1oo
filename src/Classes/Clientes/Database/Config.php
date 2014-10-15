<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 09/10/14
 * Time: 21:12
 */

namespace Classes\Clientes\Database;


class Config {

        public static function configuracaoBanco(){
            return array(
                'db' => array(
                    'dsn' => 'mysql',
                    'host' => 'localhost',
                    'user' => 'root',
                    'password' => 'root'
                )
            );

    }
} 