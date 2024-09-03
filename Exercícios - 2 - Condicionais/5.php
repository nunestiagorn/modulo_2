<?php


/* 5) Faça um algoritmo que leia o ano de nascimento de uma pessoa, 
calcule e mostre sua idade, e também informe se ela já pode votar (16 anos ou mais) e 
tirar a Carteira de Habilitação (18 anos ou mais).
*/

//sem validação de mês

echo "Digite o ano de nascimento: \n";
$anoNascimento = readline();

$idade = date('Y') - $anoNascimento;

echo "A idade da pessoa é: $idade \n";


if($idade >= 16){
    echo "A pessoa já pode votar \n";
}
else{
    echo "Não pode votar \n";
}

if($idade >= 18){
    echo "A pessoa já pode tirar a carteira de habilitação\n";
}
else{
    echo "A pessoa não pode tirar habilitação \n";
}
