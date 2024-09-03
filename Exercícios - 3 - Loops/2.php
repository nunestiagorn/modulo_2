<?php

/* 2) Elaborar um programa que leia 10 valores inteiros 
e no final apresente a somatória e a média deles.
*/

$soma = 0;
$media = 0;
$valor = 0;

for($i = 1; $i <= 10; $i++){
    echo "Digte um valor inteiro: \n";
    $valor = readline();
    $soma = $soma + $valor;
}

$media = $soma/10;

echo "A somatória dos 10 valores é: $soma \n";
echo "A média dos 10 valores é: $media \n";