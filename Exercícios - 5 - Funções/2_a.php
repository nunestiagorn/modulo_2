<?php

/* 2) a) Leia um número inteiro e retorne true 
se o número é múltiplo de 4 e false se o número 
não é múltiplo de 4. */

function multiploDeQuatro($valor){
    return $valor % 4 == 0;
}

echo "Digite um número: \n";

$num = readline();

$result = multiploDeQuatro($num);

if($result == true){
    echo "o resultado é true\n";
}
else{
    echo "o resultado é false\n";
}