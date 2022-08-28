<?php

$peso = 56;
$altura = 1.68;
$imc = $peso / $altura ** 2;

echo "O seu Índice de Massa Corporal é $imc, e você está ";

if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do peso recomendado";