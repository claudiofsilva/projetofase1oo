<?php
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

define("CLASS_DIR", __DIR__ . DIRECTORY_SEPARATOR . "src" . DIRECTORY_SEPARATOR);
spl_autoload_register(function($class) {
   $className = CLASS_DIR . str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php";
    include($className);
});

$cliente = new Classes\Clientes\Cliente();
$clienteJuridico = new Classes\Clientes\PessoaJuridica();
$clienteFisico = new Classes\Clientes\PessoaFisica();
$endereco = new \Classes\Clientes\Endereco();



$arrClientes = array(
    1 => array(
        'nome' => $cliente->setNome('Claudio Silva')->getNome(),
        'telefone' => $cliente->setTelefone('11 11111111')->getTelefone(),
        'tipo_cliente'=> $clienteJuridico->setTipo('Juridico')->getTipo(),
        'identificacao_cliente' => $clienteJuridico->setCnpj('333333333')->getCnpj(),
        'estrela' => $clienteFisico->setStar(10)->getStar(),
        'logradouro' => $endereco->setLogradouro('Rua a, n 01')->getLogradouro(),
        'cidade' => $endereco->setCidade('São Paulo')->getCidade(),
        'estado' => $endereco->setEstado('SP')->getEstado(),
        'endereco_cobranca' => $endereco->setEnderecoCobranca('rua x n 10')->getEnderecoCobranca(),
        'cep' => $endereco->setCep('06000000')->getCep(),

    ),
    2 => array(
        'nome' => $cliente->setNome('Elaine')->getNome(),
        'telefone' => $cliente->setTelefone('11 22222222')->getTelefone(),
        'tipo_cliente'=> $clienteFisico->setTipo('Fisico')->getTipo(),
        'identificacao_cliente' => $clienteFisico->setCpf('333333333')->getCpf(),
        'estrela' => $clienteFisico->setStar(2)->getStar(),
        'logradouro' => $endereco->setLogradouro('Rua a, n 01')->getLogradouro(),
        'cidade' => $endereco->setCidade('São Paulo')->getCidade(),
        'estado' => $endereco->setEstado('SP')->getEstado(),
        'endereco_cobranca' => $endereco->setEnderecoCobranca('rua x n 10')->getEnderecoCobranca(),
        'cep' => $endereco->setCep('06000000')->getCep()
    ),
    3=> array(
        'nome' => $cliente->setNome('Helena')->getNome(),
        'telefone' => $cliente->setTelefone('11 333333333')->getTelefone(),
        'tipo_cliente'=> $clienteJuridico->setTipo('Juridico')->getTipo(),
        'identificacao_cliente' => $clienteJuridico->setCnpj('333333333')->getCnpj(),
        'estrela' => $clienteFisico->setStar(3)->getStar(),
        'logradouro' => $endereco->setLogradouro('Rua a, n 01')->getLogradouro(),
        'cidade' => $endereco->setCidade('São Paulo')->getCidade(),
        'estado' => $endereco->setEstado('SP')->getEstado(),
        'endereco_cobranca' => $endereco->setEnderecoCobranca('rua x n 10')->getEnderecoCobranca(),
        'cep' => $endereco->setCep('06000000')->getCep()
    ),
    4 => array(
        'nome' => $cliente->setNome('Francisco')->getNome(),
        'telefone' => $cliente->setTelefone('11 4444444444')->getTelefone(),
        'tipo_cliente'=> $clienteFisico->setTipo('Fisico')->getTipo(),
        'identificacao_cliente' => $clienteFisico->setCpf('333333333')->getCpf(),
        'estrela' => $clienteFisico->setStar(1)->getStar(),
        'logradouro' => $endereco->setLogradouro('Rua a, n 01')->getLogradouro(),
        'cidade' => $endereco->setCidade('São Paulo')->getCidade(),
        'estado' => $endereco->setEstado('SP')->getEstado(),
        'endereco_cobranca' => $endereco->setEnderecoCobranca('rua x n 10')->getEnderecoCobranca(),
        'cep' => $endereco->setCep('06000000')->getCep()
    ),
    5 => array(
        'nome' => $cliente->setNome('Antonio')->getNome(),
        'telefone' => $cliente->setTelefone('11 55555555')->getTelefone(),
        'tipo_cliente'=> $clienteJuridico->setTipo('Juridico')->getTipo(),
        'identificacao_cliente' => $clienteJuridico->setCnpj('333333333')->getCnpj(),
        'estrela' => $clienteFisico->setStar(4)->getStar(),
        'logradouro' => $endereco->setLogradouro('Rua a, n 01')->getLogradouro(),
        'cidade' => $endereco->setCidade('São Paulo')->getCidade(),
        'estado' => $endereco->setEstado('SP')->getEstado(),
        'endereco_cobranca' => $endereco->setEnderecoCobranca('rua x n 10')->getEnderecoCobranca(),
        'cep' => $endereco->setCep('06000000')->getCep()
    ),
    6 => array(
        'nome' => $cliente->setNome('Madalena')->getNome(),
        'telefone' => $cliente->setTelefone('11 66666666')->getTelefone(),
        'tipo_cliente'=> $clienteJuridico->setTipo('Juridico')->getTipo(),
        'identificacao_cliente' => $clienteJuridico->setCnpj('333333333')->getCnpj(),
        'estrela' => $clienteFisico->setStar(1)->getStar(),
        'logradouro' => $endereco->setLogradouro('Rua a, n 01')->getLogradouro(),
        'cidade' => $endereco->setCidade('São Paulo')->getCidade(),
        'estado' => $endereco->setEstado('SP')->getEstado(),
        'endereco_cobranca' => $endereco->setEnderecoCobranca('rua x n 10')->getEnderecoCobranca(),
        'cep' => $endereco->setCep('06000000')->getCep()
    ),
    7 => array(
        'nome' => $cliente->setNome('Leticia')->getNome(),
        'telefone' => $cliente->setTelefone('11 77777777')->getTelefone(),
        'tipo_cliente'=> $clienteJuridico->setTipo('Juridico')->getTipo(),
        'identificacao_cliente' => $clienteJuridico->setCnpj('333333333')->getCnpj(),
        'estrela' => $clienteFisico->setStar(5)->getStar(),
        'logradouro' => $endereco->setLogradouro('Rua a, n 01')->getLogradouro(),
        'cidade' => $endereco->setCidade('São Paulo')->getCidade(),
        'estado' => $endereco->setEstado('SP')->getEstado(),
        'endereco_cobranca' => $endereco->setEnderecoCobranca('rua x n 10')->getEnderecoCobranca(),
        'cep' => $endereco->setCep('06000000')->getCep()
    ),
    8 => array(
        'nome' => $cliente->setNome('Alessandro')->getNome(),
        'telefone' => $cliente->setTelefone('11 88888888')->getTelefone(),
        'tipo_cliente'=> $clienteJuridico->setTipo('Juridico')->getTipo(),
        'identificacao_cliente' => $clienteJuridico->setCnpj('333333333')->getCnpj(),
        'estrela' => $clienteFisico->setStar(5)->getStar(),
        'logradouro' => $endereco->setLogradouro('Rua a, n 01')->getLogradouro(),
        'cidade' => $endereco->setCidade('São Paulo')->getCidade(),
        'estado' => $endereco->setEstado('SP')->getEstado(),
        'endereco_cobranca' => $endereco->setEnderecoCobranca('rua x n 10')->getEnderecoCobranca(),
        'cep' => $endereco->setCep('06000000')->getCep()
    ),
    9 => array(
        'nome' => $cliente->setNome('Matheus')->getNome(),
        'telefone' => $cliente->setTelefone('11 00000000')->getTelefone(),
        'tipo_cliente'=> $clienteJuridico->setTipo('Juridico')->getTipo(),
        'identificacao_cliente' => $clienteJuridico->setCnpj('333333333')->getCnpj(),
        'estrela' => $clienteFisico->setStar(5)->getStar(),
        'logradouro' => $endereco->setLogradouro('Rua a, n 01')->getLogradouro(),
        'cidade' => $endereco->setCidade('São Paulo')->getCidade(),
        'estado' => $endereco->setEstado('SP')->getEstado(),
        'endereco_cobranca' => $endereco->setEnderecoCobranca('rua x n 10')->getEnderecoCobranca(),
        'cep' => $endereco->setCep('06000000')->getCep()
    ),
    10 => array(
        'nome' => $cliente->setNome('Gabriella')->getNome(),
        'telefone' => $cliente->setTelefone('11 99999999')->getTelefone(),
        'tipo_cliente'=> $clienteJuridico->setTipo('Juridico')->getTipo(),
        'identificacao_cliente' => $clienteJuridico->setCnpj('333333333')->getCnpj(),
        'estrela' => $clienteFisico->setStar(5)->getStar(),
        'logradouro' => $endereco->setLogradouro('Rua a, n 01')->getLogradouro(),
        'cidade' => $endereco->setCidade('São Paulo')->getCidade(),
        'estado' => $endereco->setEstado('SP')->getEstado(),
        'endereco_cobranca' => $endereco->setEnderecoCobranca('rua x n 10')->getEnderecoCobranca(),
        'cep' => $endereco->setCep('06000000')->getCep()
    ),
);

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
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/fase1.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
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
				  <li class="list-group-item col-lg-12"><a href="<?php echo '?cliente='.$chave;?>"><span class="text-left col-lg-4"><?php echo 'id: '.$chave ?></span><span class="text-left col-lg-4"><?php echo  'Nome: '. $valor['nome']?></span><span class="text-right col-lg-4"><?php echo 'Tipo Cliente: '.$valor['tipo_cliente'] ?></span></a></li>
				<?php } ?>
			</ul>	
			<?php }elseif($_GET['cliente']) { ?>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#">Cliente</a></li>
                    <li><a href="/">Voltar</a></li>
                </ul>

                <div class="separaBloco"></div>

                <ul class="list-group">
                    <li class="list-group-item"><?php echo "Nome: ".$arrClientes[$_GET['cliente']]['nome']?></li>
                    <li class="list-group-item"><?php echo "Telefone: ".$arrClientes[$_GET['cliente']]['telefone']?></li>
                    <li class="list-group-item"><?php echo "Tipo Cliente: ".$arrClientes[$_GET['cliente']]['tipo_cliente']?></li>
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
