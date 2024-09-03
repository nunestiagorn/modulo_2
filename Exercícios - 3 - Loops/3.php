<?php

/* 3) Elaborar um programa que leia sucessivamente valores inteiros e no final apresente a somatória, 
a média e a quantidade de valores lidos.
 O programa deve ler os valores enquanto o usuário estiver fornecendo valores diferentes de zero. 
*/

$soma = 0;
$count = 0;
$media = 0;

while(true){
    echo "Digite um número se for 0 vai parar: \n";
    $valor = readline();

    if($valor == 0){
        break;
    }
    
    $soma = $soma + $valor;
    $count ++;
}

$media = $soma / $count;

echo "Esse é o valor da soma dos valores: $soma \n";
echo "Esse é o valor da média dos valores: $media \n";
echo "Esse é a quantidade de valores: $count \n";

