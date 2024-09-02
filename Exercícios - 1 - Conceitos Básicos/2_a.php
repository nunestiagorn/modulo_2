<?php

//2 a) Dados dois números inteiros (dividendo e divisor), apresentar o quociente e o resto. 

/* Entrada de dois valores via terminal, dividendo e divisor*/

echo "Digite o dividendo: ";
$dividendo = readline();
echo "Digite o divisor: ";
$divisor = readline();

/* varíável  $quociente recebendo o valor do quociente entre dividendo e divisor */
$quociente = $dividendo / $divisor;

/* varíável  $resto recendo o valor do resto entre dividendo e divisor */
$resto = $dividendo % $divisor;

echo "O quociente entre $dividendo e $divisor é " . $quociente . "\n";

echo "O resto entre $dividendo e $divisor é " . $resto . "\n";