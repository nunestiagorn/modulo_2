<?php

/* 2 g) Uma revendedora de carros usados paga a seus vendedores um salário fixo mensal, 
além de uma comissão fixa por cada carro vendido e mais 5% do valor total das vendas realizadas pelo vendedor.
 Escreva um algoritmo que receba como entrada o número de carros vendidos pelo vendedor, o valor total das vendas, o salário fixo mensal e o valor da comissão por carro vendido.
 O algoritmo deve calcular e exibir o salário final do vendedor, que é a soma do salário fixo, da comissão por carro vendido, e 5% do valor total das vendas. */

echo "Digite o número de carros vendidos: ";
$numCarrosVendidos = readline();

echo "Digite o valor total em vendas: ";
$valorTotalVendas = readline();

echo "Digite o salário fixo do vendedor: ";
$salarioFixo = readline();

echo "Digite o valor de comissão por carro vendido: ";
$comissaoPorCarro = readline();

//Calculando comissão total, dada pelo número de carros vendidos * a comissão por carro

$comissaoTotal = $numCarrosVendidos * $comissaoPorCarro;

//Percentual sobre vendas

$percentualSobreVendas = $valorTotalVendas * 0.05;

//Salário total

$salTotal = $salarioFixo + $comissaoTotal + $percentualSobreVendas;

echo "O salário final do vendedor considerando os valores de comissão é: $salTotal";