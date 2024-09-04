<?php

/* 4) Elaborar um programa que apresente o 
resultado da soma e a média dos valores pares situados 
na faixa numérica de 50 a 70. */

$soma = 0;
$count = 0;
$media = 0;

for($i = 50; $i <= 70; $i++){
    if($i % 2 == 0){
        $soma = $soma + $i;
        $count ++;
    }
}

$media = ($soma / $count);

echo "Soma dos valores pares situados na faixa numérica de 50 a 70, soma: $soma \n";
echo "Média dos valores: $media\n";