<?php

// 2) Ler um valor e escrever se é positivo ou negativo (considere o valor zero como positivo).

echo "Digite um valor: ";
$num = readline();

if( $num >= 0){
    echo "O valor $num é positivo.\n";
}
else{
    echo "O valor $num é negativo. \n";
}