<?php

/*2) b) Leia um número inteiro e retorne true se
 o número é par e false se o número é ímpar.
*/

function par($valor){
    return $valor % 2 == 0;
}


echo "Digite um número: \n";

$num = readline();

$result = par($num);

if($result == true){
    echo "o resultado é true\n";
}
else{
    echo "o resultado é false\n";
}