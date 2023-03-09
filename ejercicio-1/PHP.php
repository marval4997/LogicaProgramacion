<?php
//Dado un numero calcular su tabla de multiplicar

$numero = 10;

for($i=0; $i<=$numero; $i++){
    $resultado = $i*$numero;

    echo "$numero x $i = $resultado"."<br>";
};