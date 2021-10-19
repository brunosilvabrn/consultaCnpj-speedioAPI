<?php 

require __DIR__.'/vendor/autoload.php';

use App\WebService\Speedio;

$obSpeedio = new Speedio;

$cnpj = '00.000.000/0001-91';

$resultado = $obSpeedio->consultarCNPJ($cnpj);

if (empty($resultado)) {
	die("Problemas ao consultar CNPJ");
}

if(isset($resultado['error'])) {
	die($resultado['error']);
}

echo "<pre>";
print_r($resultado);