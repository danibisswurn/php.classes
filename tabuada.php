<?php

$multiplicador = 5;

for ($numero=1; $numero<=10; $numero++) {
    $resultado = $multiplicador * $numero;
    echo "$numero x $multiplicador = $resultado" . PHP_EOL;
}