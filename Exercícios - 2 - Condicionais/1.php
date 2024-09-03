<?php

/* 1) Faça um algoritmo que leia um valor e escreva a mensagem 
“É maior que 10!” se o valor lido for maior que 10, caso contrário escrever “Não é maior que 10!”. */


echo "Digite um valor: ";
$num = readline();

if($num > 10){
    echo "$num é maior que 10 \n";
   
} 
else{
    echo "$num não é maior que 10\n";
}

