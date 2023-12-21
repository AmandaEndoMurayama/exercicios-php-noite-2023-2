<?php

echo "Anonymous functions <br> <br>";

$array = [10, 13, 15, 20, 25, 27, 29, 35, 40];

echo "<pre>"; print_r($array); echo "<pre>";

$numeros = array_filter($array, function($item) {
    return $item % 10 == 0;
});
echo "<br>multiplos<br>";
echo "<pre>"; print_r($numeros); echo "<pre>";

// --------------------------------------------------
// Arrow functions
// simplifica a função anonima (muito utilizada para casos simples)

echo "Arrow function <br><br>";

$array = [10, 13, 15, 20, 25, 27, 29, 35, 40];

$numeros = array_filter($array, fn($item) => $item % 5 == 0);

    echo "<pre>"; print_r($array); echo "<pre>";

    echo "<br>multiplos<br>";

    echo "<pre>"; print_r($numeros); "echo <pre>";


//----------------------------------------------------
// Funções recursivas

echo "recuriva <br><br>";
function dividir($numero) {
    $result = $numero / 2;
    echo "$numero <br>";

    if (round($result) > 0) {
        dividir($result);
    }
}
dividir(50);

// -----------------------------------------------------
// função número absoluto (num positivo)
echo "<br> absoluto <br>";
$num = -9.5;

echo abs($num);

// -----------------------------------------------------
echo "<br><br> pi <br>";
echo pi();

// --------------------------------------------------
// função arredondar num p baixo

echo "<br><br> arredondar num para baixo <br>";

$n = 2.8;
echo $n."<br>";

echo floor($n);

echo "<br><br> arredondar num para cima <br>";
$n2 = 3.3;
echo "<br>".$n2."<br>";

// -----------------------------------------------------
// arredondar cadas decimais
echo "<br><br> Arredondar casas decimais <br>";
$n4 = 3.653647;
echo "<br>".$n4."<br>";

$testePi = pi();
echo "<br>".$testePi;
echo round($n4, 2);
echo "<br>".round($testePi,2);

// --------------------------------------------------
// função numero aleatório

echo "<br><br> numero aleatório <br>";

$randomico = rand(2, 100);

echo $randomico;

// ---------------------------------------------------
// função num menor e maior do array

echo "<br><br> número num maior <br>";

$nMaior = [3, 6, 8, 9, 10, 15, 25, 99];

echo max($nMaior);

echo "<br><br> número num menor <br>";

$nMenor = [2, 3, 6, 1, 3, 6, 4, 7, 0];

echo min($nMenor);

// -----------------------------------------
// função retirar espaços
echo "<br><br> manipulação de string <br>";
echo "<br> retirar espaços <br>";

$nomeComEspaco = "     Edson           ";

$nomeSemEspaco = trim($nomeComEspaco);

echo "<br> com espaço ".strlen($nomeComEspaco);
echo "<br> sem espaço ".strlen($nomeSemEspaco);

// ----------------------------------------------
// função lower/upper

echo "<br><br> lower case <br>";

$nome1 = "Amanda Endo";

echo "<br>".strtolower($nome1);

echo "<br><br> UPPER case <br>";

echo "<br>".strtoupper($nome1);

// ---------------------------------------------
// função recuperar alguns caracteres

echo "<br><br> Escolher algumas strings <br>";

$nome2 = "pedro";

echo "<br>".$nome2;
echo "<br>".substr($nome2, 2, 3);
echo "<br>".substr($nome2,-3);

// ----------------------------------------------
// echo "<br><br> transformar o nome do array <br>";

echo $nomeCompleto = 


?> 