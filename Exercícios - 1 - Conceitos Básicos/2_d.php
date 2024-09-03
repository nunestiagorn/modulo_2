<?php

/* 2 d) Sabendo-se que 100 quilowatts de 
energia custa um sétimo do salário mínimo, fazer um algoritmo que receba o valor do salário mínimo e a 
quantidade de quilowatts gasta por uma residência. Calcular: o valor em reais de cada quilowatt, 
o valor em reais a ser pago e o valor a ser pago com desconto de 10%. */


// salário mínimo R$ 1.412,00 em 2024

echo "Digite o salário mínimo: ";
$salMinimo = readline();

echo "Digite o valor em quilowatts gastos: ";
$quilowatts = readline();


$custo100quilowatts = $salMinimo / 7;

$custoPorQuilowhatts = $custo100quilowatts/100;


$valorPago = $quilowatts * $custoPorQuilowhatts;


echo "Valor a ser pago: $valorPago \n";

// variável de desconto

$valorDesc = $valorPago* 0.10;

$desc =  $valorPago - $valorDesc;

echo "Valor a ser pago com desconto: $desc";