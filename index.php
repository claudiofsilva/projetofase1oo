<?php

ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

require_once 'autoload.php';

use Classes\Clientes\Database\Conexao;
use Classes\Clientes\Database\Query;

$conexao = new Conexao();
$query = new Query($conexao);

$arrClientes = $query->listaClientes();


if(isset($_GET)){
    if(isset($_GET['ordem'])){
        if($_GET['ordem'] == 'ascendente'){
            ksort ($arrClientes);
        }elseif($_GET['ordem'] == 'descendente'){
            krsort ($arrClientes);
        }
    }

}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projeto fase 1</title>
        <link href="public_html/css/bootstrap.min.css" rel="stylesheet">
        <link href="public_html/css/fase1.css" rel="stylesheet">
        <script src="public_html/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
			<?php if(!$_GET or isset($_GET['ordem'])) { ?>
			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href="#">Ordenar Clientes</a></li>
				<li><a href="?ordem=ascendente">Ascendente</a></li>
				<li><a href="?ordem=descendente">Descendente</a></li>
			</ul>
			
			<div class="separaBloco"></div>
			
			<ul class="list-group col-lg-12">
				<?php foreach($arrClientes as $chave => $valor){ ?>
				  <li class="list-group-item col-lg-12"><a href="<?php echo '?cliente='.$chave;?>"><span class="text-left col-lg-4"><?php echo 'id: '.$valor['id_cliente']; ?></span><span class="text-left col-lg-4"><?php echo 'Nome / Razão Social: ' .(($valor['nome']) ? $valor['nome'] : $valor['razao_social'])?></span><span class="text-right col-lg-4"><?php echo 'Qtd Estrela: '.$valor['estrela'] ?></span></a></li>
				<?php } ?>
			</ul>	
			<?php }elseif($_GET['cliente'] >= 0) { ?>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#">Cliente</a></li>
                    <li><a href="/">Voltar</a></li>
                </ul>

                <div class="separaBloco"></div>

                <ul class="list-group">
                    <li class="list-group-item"><?php echo "Nome / Razão Social: ".(($arrClientes[$_GET['cliente']]['nome']) ? $arrClientes[$_GET['cliente']]['nome'] : $arrClientes[$_GET['cliente']]['razao_social'])?></li>
                    <li class="list-group-item"><?php echo "Telefone DDD: ".$arrClientes[$_GET['cliente']]['ddd']?></li>
                    <li class="list-group-item"><?php echo "Telefone Numero: ".$arrClientes[$_GET['cliente']]['numero']?></li>
                    <li class="list-group-item"><?php echo "Logradouro: ".$arrClientes[$_GET['cliente']]['logradouro']?></li>
                    <li class="list-group-item"><?php echo "Estrela Cliente: ".$arrClientes[$_GET['cliente']]['estrela']?></li>
                    <li class="list-group-item"><?php echo "Cidade: ".$arrClientes[$_GET['cliente']]['cidade']?></li>
                    <li class="list-group-item"><?php echo "Estado: ".$arrClientes[$_GET['cliente']]['estado']?></li>
                    <li class="list-group-item"><?php echo "Endereço Cobrança: ".$arrClientes[$_GET['cliente']]['endereco_cobranca']?></li>
                    <li class="list-group-item"><?php echo "CEP: ".$arrClientes[$_GET['cliente']]['cep']?></li>

                 </ul>

            <?php } ?>
        </div>

    </body>
</html>
