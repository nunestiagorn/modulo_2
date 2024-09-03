<?php

// 2 g) Calcular a área de um losango (dadas as diagonais maior e menor).

echo "Digita o valor da diagonal maior: ";
$diagMaior = readline();

echo "Digita o valor da diagonal menor: ";
$diagMenor = readline();

// Cálculo da área de um losango é dado por (diagonal maior x diagonal menor )/ 2

$area = ($diagMaior * $diagMenor)/2;

echo "Essa é o área do losango com diagonal maior $diagMaior e diagonal menor $diagMenor: " . $area . "\n";