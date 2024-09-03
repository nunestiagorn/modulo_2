<?php

/* 9) Desenvolva um algoritmo que, dado um número,
 verifique se ele está entre 30 e 90 ou é maior que 120 
 ou não se encaixa em nenhuma dessas condições. */


 echo "Digite um número: ";

 $num = readline();


if($num >= 30 && $num <= 90){
    echo "O $num está entre 30 e 90 \n";
 }
elseif($num > 120){
    echo "O $num é maior que 120 \n";
 }
else{
    echo "O $num não se encaixa em nenhuma das condições \n";
}