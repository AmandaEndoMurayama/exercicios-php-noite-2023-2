<!-- Escreva um código onde o usuário possa escolher um dos arrays abaixo e selecionar se ele quer ordenar de maneira crescente ou 
de maneira decrescente. Separe as ordenações em funções diferentes e chame elas dependendo da escolha.
 Array1[2, 90, 100, 1, 4, 7] Array2[3, 7, 13, 87, 1, 2, 69] -->
<?php

$opcao =  $_GET['opcao'];
$opcao2 =  $_GET['opcao2'];

$array1 = [2, 90, 100, 1, 4, 7];
$array2 = [3, 7, 13, 87, 1, 2, 69];

if ($opcao == 1) {
    if ($opcao2 == 1) {
        crescente($array1);
    } else {
        decrescente($array1);
    }
} else {
    if ($opcao2 == 1) {
        crescente($array2);
    } else {
        decrescente($array2);
    }
}

//  ordenador($nome, $opcao, $opcao2);
function crescente($ordem)
{
    echo  sort($ordem);
}
function decrescente($ordem)
{
    echo  rsort($ordem);
}
?>