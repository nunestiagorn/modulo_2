<?php

/* 7) Elabore um algoritmo que, dada a idade de um nadador, classifique-o em uma das categorias:
    
Idade Categoria
5 até 7 anos - Infantil A

8 até 10 anos - Infantil B

11 até 13 anos - Juvenil A

14 até 17 anos - Juvenil B

Sênior - Maiores de 18 anos
*/

echo "Digite a idade do nadador: \n";

$idade = readline();


switch($idade){

    case ($idade < 5):
        echo "Não tem idade suficiente";
        break;
    case ($idade >= 5 && $idade <= 7):
        echo "Categoria - Infantil A";
        break;
    case ($idade >= 8 && $idade <= 10):
        echo "Categoria - Infantil B";
        break;
    case ($idade >= 11 && $idade <= 13):
        echo "Categoria - Juvenil A";
        break;
    case ($idade >= 5 && $idade <= 7):
        echo "Categoria - Juvenil B";
         break;
    case ($idade >= 5 && $idade <= 7):
        echo "Categoria - Juvenil B";
        break;
    default:
        echo "Idade Inválida";
        break;
}