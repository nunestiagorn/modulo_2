<?php

// 2 f) Calcular a área de um triângulo (dadas a base e a altura)

echo "Digita o valor da base do triângulo: ";
$base = readline();

echo "Digita o valor da altura do triângulo: ";
$altura = readline();


// calculo da área do triângulo, área igual ( base x altura) / 2

$area = ($base * $altura)/2;

echo "Essa é o área do triângulo com base $base e altura $altura: " . $area . "\n";