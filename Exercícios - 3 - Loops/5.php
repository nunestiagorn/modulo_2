<?php

/* Elaborar um programa que leia valores inteiros 
até que o valor zero seja informado. 
No final deve ser apresentado o maior e o menor 
valor fornecido pelo usuário. */

$maior = 0;
$menor = 0;
$num = null;

while(true){
    echo "Digite um número, se digitar 0 encerra o loop \n";
    $num = readline();

    if($num == 0){
        break;
    }
    if( $num > $maior){
        $maior = $num;
    }
    if($num < $menor){
        $menor = $num;
    }
}

echo "O maior número é: $maior\n";
echo "O menor número é: $menor\n";