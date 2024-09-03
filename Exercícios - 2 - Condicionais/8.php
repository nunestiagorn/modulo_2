<?php

/* 8) Desenvolva um algoritmo que calcule o valor
 a ser pago por um produto, considerando o preço
  de etiqueta e a condição de pagamento. Utilize 
  os códigos do quadro abaixo para ler a condição 
  de pagamento e efetuar o cálculo adequado

  Código  Condição de pagamento
    1       À vista em dinheiro com 10% de desconto.
    2       À vista no cartão com 5% de desconto.
    3       Em 2 vezes, preço normal da etiqueta.
    4       Em 3 vezes, preço normal da etiqueta com juros de 10%.
*/
echo "Digite o preço da etiqueta: \n";
$precoEtiqueta = readline();

echo "\n
    Código  Condição de pagamento
    1       À vista em dinheiro com 10% de desconto.
    2       À vista no cartão com 5% de desconto.
    3       Em 2 vezes, preço normal da etiqueta.
    4       Em 3 vezes, preço normal da etiqueta com juros de 10%. \n";

echo "Digite a condição de pagamento:";
$condicaoPag = readline();
$valorFinal = 0;

switch($condicaoPag){
    case 1:
        // À vista em dinheiro com 10% de desconto.
    $valorFinal = $precoEtiqueta *0.90;
    echo "O  valor a ser pago com 10% de desconto R$: $valorFinal";
    break;

    case 2:
        // À vista no cartão com 5% de desconto.
    $valorFinal = $precoEtiqueta *0.95;
    echo "O  valor a ser pago com 5% de desconto R$: $valorFinal";
    break;

    case 3:
        // Em 2 vezes, preço normal da etiqueta.
    $valorFinal = $precoEtiqueta;
    echo "O  valor a ser pago em duas vezes é R$: $valorFinal";
    break;

    case 4:
        // Em 3 vezes, preço normal da etiqueta com juros de 10%.
    $valorFinal = $precoEtiqueta *1.10;
    echo "O  valor em 3x com acréscimo de 10% no valor da etiqueta é R$: $valorFinal";
    break;

}