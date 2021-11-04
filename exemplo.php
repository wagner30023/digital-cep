<?php

require_once "./vendor/autoload.php";

use carlos\DigitalCep\Search;

$busca = new Search();
$resultado = $busca->getAddressFromZipcode('72641-132');

print_r($resultado);