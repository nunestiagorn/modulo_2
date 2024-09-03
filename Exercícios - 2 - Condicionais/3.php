<?php

/* 3) As maçãs custam R$1,30 cada se forem compradas menos de uma dúzia, e R$1,00 se forem compradas pelo menos 12.
 Escreva um programa que leia o número de maçãs compradas, calcule e escreva o custo total da compra. */


 echo "Digite a quantidade de maçãs compradas: ";
$numVendidas = readline();
$valorTotal = 0;

if($numVendidas >= 12){
    $valorTotal = $numVendidas * 1;
}
else{
    $valorTotal = $numVendidas * 1.30;
}

echo "Número de maçãs vendadidas é igual $numVendidas com o custo de $valorTotal";