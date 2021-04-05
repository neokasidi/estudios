<?php 

$cantidad_uf = 2300;
define("UF",27000);

function calculoUf($uf){
	$resultado = number_format($uf * UF);
	return $resultado;
}

echo 'El precio del inmueble es de $ ' . calculoUf($cantidad_uf);