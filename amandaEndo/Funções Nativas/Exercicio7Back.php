<!-- 7 - Faça um código onde irá gerar 5 números aleatórios. Com esses números gerados, monte um array e caso a primeira posição seja menor
 que 5, remova o primeiro valor. -->
 <?php

$num1 = $_GET['num1'];

gerar($num1);

function gerar($num1)   
{
    for ($i = 0; $i < $quantidade; $i++) {
       $randomico = rand($num1, $num2);
       echo "<br>".$randomico;
    }
}


?>