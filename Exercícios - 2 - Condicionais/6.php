<?php


/* 6)
Ler dois valores (considere que não serão lidos valores iguais) e escrever o maior deles. */

echo "Digite dois valores, um depois do outro, os valores não podem ser iguais \n";
echo "Digite o primeiro valor: \n";
$num1 = readline();

echo "Digite o segundo valor: \n";
$num2 = readline();


if($num1 > $num2){
    echo "O valor $num1 é maior que o valor $num2.";
}
else{
    echo "O valor $num2 é maior.";
}