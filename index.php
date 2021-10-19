<?php 

require __DIR__.'/vendor/autoload.php';

use App\WebService\Speedio;

$obSpeedio = new Speedio;
$resultado = [];

if (isset($_POST['cnpj']) && !empty($_POST['cnpj'])) {
	
	$cnpj = $_POST['cnpj'];
	$resultado = $obSpeedio->consultarCNPJ($cnpj);

}

require 'src/index.php';
