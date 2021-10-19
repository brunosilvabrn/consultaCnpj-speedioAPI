<?php

namespace App\WebService;

class Speedio {

	const URL_BASE = 'https://api-publica.speedio.com.br';

	public function consultarCNPJ($cnpj) {
	
		$cnpj = preg_replace('/\D/', '', $cnpj);

		return $this->get("/buscarcnpj?cnpj=".$cnpj);

	}

	public function get($resource) {

		$endpoint = self::URL_BASE.$resource;

		$curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => $endpoint,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_CUSTOMREQUEST =>'GET'
		]);

		$response = curl_exec($curl);

		curl_close($curl);

		$responseArray = json_decode($response, true);

		return is_array($responseArray) ? $responseArray : [];
	}

}