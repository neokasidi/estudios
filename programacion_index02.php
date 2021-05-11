<?php

$varUno  = 6;
$varDos  = 8;
$varTres = 4;

function resutado($varUno, $varDos, $varTres)
{
    return ($varUno + $varDos + $varTres)  / 3;
}

$mensaje = "El promedio de la expresion " . $varUno . " + " . $varDos .
           " + " . $varTres . " es: ";

echo $mensaje . resutado($varUno, $varDos, $varTres);