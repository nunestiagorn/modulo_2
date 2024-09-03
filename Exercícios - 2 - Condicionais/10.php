<?php

/* 10)Um comerciante usa margem de lucro de 45% 
se o valor de compra do produto for menor que R$20,00 
e 30% nos demais casos. Dado o valor do produto, 
calcule o preço de venda.

*/

echo "Digite o valor do produto \n";

$valorProduto = readline();
$precoVenda = 0;

if($valorProduto < 20.00){
    $precoVenda = $valorProduto *1.45;
}
else{
    $precoVenda = $valorProduto * 1.30;
}

echo "O preço de venda é: R$ $precoVenda \n";