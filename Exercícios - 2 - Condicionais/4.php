<?php


/* 4) Ler as notas da 1a. e 2a. avaliações de um aluno. Calcular a média aritmética simples e escrever uma mensagem que diga 
se o aluno foi ou não aprovado (considerar que nota igual ou maior que 6 o aluno é aprovado). Escrever também a média calculada.
*/


echo "Digite a nota da primeira avaliação: ";
$notaPrimeira = readline();

echo "Digite a nota da segunda avaliaçaõ: ";
$notaSegunda = readline();

$mediaArit = ($notaPrimeira + $notaSegunda)/2;

if($mediaArit >= 6){
    echo "Aluno foi aprovado com média: $mediaArit";
}
else{
    echo "Aluno foi reprovado com média: $mediaArit";
}