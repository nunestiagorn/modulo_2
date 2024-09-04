<?php

/* Escreva um programa com quatro funções diferentes,
 cada uma recebe dois números inteiros e realiza uma 
 operação matemática diferente (soma, subtração, 
 multiplicação e divisão) e retorna o resultado. 
 A escolha da função a ser executada é decidida por 
 uma variável inteira que é preenchida no início do 
 programa juntamente com as outras duas variáveis com os 
 valores do cálculo. O resultado deve ser apresentado no 
 final da execução. Quando a função de divisão é utilizada, 
 ela deve retornar uma mensagem de erro se ocorrer divisão 
 por zero.
*/

function soma ($num1, $num2){
    return $num1 + $num2;
}

function subtracao ($num1, $num2){
    return $num1 - $num2;
}

function multiplicacao ($num1, $num2){
    return $num1 * $num2;
}

function divisao ($num1, $num2){
    if($num2 == 0){
        return  "Divisão por zero";
    }
    return $num1 / $num2;
}

echo "Digite dois valores e depois escolha a operação\n";

echo "Digite o primeiro número: \n";

$valor1 = readline();
echo "Digite o segundo número: \n";
$valor2 = readline();

$operacao = null;
$result = 0;


echo "1 - Soma\n";
echo "2 - Subtração\n";
echo "3 - Multiplicação\n";
echo "4 - Divisão\n";
echo "Digite para escolher a operação:\n";

$operacao = readline();

switch($operacao){
   case 1:
        $result = soma($valor1, $valor2);
        break;
   case 2:
        $result = subtracao($valor1, $valor2);
        break;
   case 3:
        $result = multiplicacao($valor1, $valor2);
        break;
   case 4:
        $result = divisao($valor1, $valor2);
        break;
   default:
        $result = "Operação não existe!";
        break;

}

echo "Resultado da operacao $operacao foi: $result";

