<!-- 4 - Crie um sorteador dinâmico com três entrada na tela, sendo elas, a primeira e a segunda entrada o gap de números que irá gerar, 
e a terceira entrada a quantidade de números que serão sorteados, e apresente na tela todos os resultados. -->
<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$quantidade = $_GET['quantidade'];


sorteador($num1, $num2, $quantidade);

function sorteador($num1, $num2, $quantidade)   
{
    for ($i = 0; $i < $quantidade; $i++) {
       $randomico = rand($num1, $num2);
       echo "<br>".$randomico;
    }
}


?>