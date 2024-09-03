<?php

//A partir de quatro números que serão fornecidos, calcular a média ponderada, considerando os pesos 1, 2, 3 e 4 respectivamente.

// Entrada de quatro valores via terminal

echo "Digite o primeiro número que terá peso 1 no calculo: ";
$num1 = readline();
echo "Digite o segundo número que terá peso 2 no calculo: ";
$num2 = readline();
echo "Digite o terceiro número que terá peso 3 no calculo: ";
$num3 = readline();
echo "Digite o quarto número que terá peso 4 no calculo: ";
$num4 = readline();

// Declarando os pesos em variáveis
$peso1 = 1;
$peso2 = 2;
$peso3 = 3;
$peso4 = 4;



$medPonderada = (($num1 * 1)+ ($num2 * 2) + ($num3 * 3) + ($num4 * 4))/ ($peso1 + $peso2 + $peso3 + $peso4);

echo "A média ponderada entre $num1, $num2, $num3 e $num4 com os pesos 1, 2, 3, 4 é: " . $medPonderada . "\n";