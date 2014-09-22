<?php
    require_once"classes/Cliente.php";
    $cliente = new Cliente();


$arrClientes = array(
    1 => array(
        'nome' => $cliente->setNome('Claudio Silva')->getNome(),
        'endereco' => $cliente->setEndereco('rua 1')->getEndereco(),
        'cidade' => $cliente->setCidade('São Paulo')->getCidade(),
        'cpf' => $cliente->setCpf('11111111111')->getCpf()
    ),
    2 => array(
        'nome' => $cliente->setNome('Elaine')->getNome(),
        'endereco' => $cliente->setEndereco('rua 2')->getEndereco(),
        'cidade' => $cliente->setCidade('São Paulo')->getCidade(),
        'cpf' => $cliente->setCpf('22222222222')->getCpf()
    ),
    3=> array(
        'nome' => $cliente->setNome('Helena')->getNome(),
        'endereco' => $cliente->setEndereco('rua 3')->getEndereco(),
        'cidade' => $cliente->setCidade('São Paulo')->getCidade(),
        'cpf' => $cliente->setCpf('33333333333')->getCpf()
    ),
    4 => array(
        'nome' => $cliente->setNome('Francisco')->getNome(),
        'endereco' => $cliente->setEndereco('rua 4')->getEndereco(),
        'cidade' => $cliente->setCidade('São Paulo')->getCidade(),
        'cpf' => $cliente->setCpf('44444444444')->getCpf()
    ),
    5 => array(
        'nome' => $cliente->setNome('Antonio')->getNome(),
        'endereco' => $cliente->setEndereco('rua 5')->getEndereco(),
        'cidade' => $cliente->setCidade('São Paulo')->getCidade(),
        'cpf' => $cliente->setCpf('555555555555')->getCpf()
    ),
    6 => array(
        'nome' => $cliente->setNome('Madalena')->getNome(),
        'endereco' => $cliente->setEndereco('rua 6')->getEndereco(),
        'cidade' => $cliente->setCidade('São Paulo')->getCidade(),
        'cpf' => $cliente->setCpf('66666666666')->getCpf()
    ),
    7 => array(
        'nome' => $cliente->setNome('Leticia')->getNome(),
        'endereco' => $cliente->setEndereco('rua 7')->getEndereco(),
        'cidade' => $cliente->setCidade('São Paulo')->getCidade(),
        'cpf' => $cliente->setCpf('77777777777')->getCpf()
    ),
    8 => array(
        'nome' => $cliente->setNome('Alessandro')->getNome(),
        'endereco' => $cliente->setEndereco('rua 8')->getEndereco(),
        'cidade' => $cliente->setCidade('São Paulo')->getCidade(),
        'cpf' => $cliente->setCpf('88888888888')->getCpf()
    ),
    9 => array(
        'nome' => $cliente->setNome('Matheus')->getNome(),
        'endereco' => $cliente->setEndereco('rua 9')->getEndereco(),
        'cidade' => $cliente->setCidade('São Paulo')->getCidade(),
        'cpf' => $cliente->setCpf('99999999999')->getCpf()
    ),
    10 => array(
        'nome' => $cliente->setNome('Gabriella')->getNome(),
        'endereco' => $cliente->setEndereco('rua 10')->getEndereco(),
        'cidade' => $cliente->setCidade('São Paulo')->getCidade(),
        'cpf' => $cliente->setCpf('1010101012000')->getCpf()
    ),
);
//ksort ($arrClientes);
//
//foreach($arrClientes as $chave => $valor){
//    echo $chave .'---'.$valor['nome'];
//}



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projeto fase 1</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/fase1.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
        </div>

    </body>
</html>
