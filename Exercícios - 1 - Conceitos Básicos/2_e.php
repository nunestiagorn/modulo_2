<?php

//2 e) Dadas a base e a altura de um retângulo, calcular o perímetro, a área e a diagonal.

echo "Digita o valor da base do retângulo: ";
$base = readline();

echo "Digita o valor da altura do retângulo: ";
$altura = readline();

// Perímetro do retângulo 
$perímetro = 2*($base + $altura);

// Área do retângulo
$area = $base * $altura;

// Diagonal do retângulo
$diagonal = sqrt(($altura * $altura) + ($base * $base));

echo "Esse é o perímetro do retângulo com base $base e altura $altura: " . $perímetro . "\n";

echo "Essa é o área do retângulo com base $base e altura $altura: " . $area . "\n";

echo "Essa é a diagonal do retângulo com base $base e altura $altura: " . $diagonal . "\n";