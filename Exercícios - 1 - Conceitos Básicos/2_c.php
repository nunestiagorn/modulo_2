<?php

//2 C) Calcular o valor de um produto que sofreu reajuste de 1% (Aumento).

//Definindo o valor do produto

echo "Digite o valor do produto: ";
$valorProduto = readline();

// Declarando a variável de aumento

$reajuste = 1; // 1% ou 0,01 que será usado na conta.

$valorReajuste = ($valorProduto * ($reajuste/100));

$novoValor = $valorProduto + $valorReajuste;

echo "Valor do reajuste: $valorReajuste \n";

echo "O valor reajustado ficará: $novoValor";
