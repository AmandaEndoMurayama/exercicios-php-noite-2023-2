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

// echo $nomeCompleto = 

// ------------------------------------------------
// aula 14.12
// contar quantas posições tem no array

// echo "<br><br> contar quantas posições tem no array <br>";

$listaArray = [1, "Edson", 211, "Odonto", "Lions"];

echo "Total:".count($listaArray);

// ------------------------------------------------

echo "<br><br> Diferença entre arrays<br>";

$listaAlunos = ["João", "Edson", "Rodrigo", "Odonto", "Lions"];
$alunosAprovados = ["João", "Edson"];

$reprovados = array_diff($listaAlunos, $alunosAprovados);

print_r($reprovados);

// ------------------------------------------------

echo "<br><br> filtrar algo no array<br>";

$numArray = [1, 112, 25, 36, 85];

$filtrados = array_filter($numArray, fn($item) => $item < 86);

print_r($filtrados);


// ------------------------------------------------
echo "<br><br> alteração de array<br>";

$numArray =  [1, 112, 25, 36, 85];

$resultado2 = array_map( function($item) {
    return $item * 2;
}, $numArray);

print_r($resultado2);

// ------------------------------------------------

echo "<br><br> remove o ultimo item do array<br>";

$numArray = [1, 112, 25, 36, 85];

array_pop($numArray);

print_r($numArray);

// ------------------------------------------------

echo "<br><br> remove o primeiro item do array<br>";

$numArray = [1, 112, 25, 36, 85];

array_shift($numArray);

print_r($numArray);


// ------------------------------------------------

echo "<br><br> buscar algo no array<br>";

$numArray = [1, 112, 25, 36, 85];

if (in_array(85, $numArray)){
    echo "Tem";
} else {
    echo "Não tem";
}
// ------------------------------------------------
echo "<br><br> buscar algo no array, se tiver retona a posição<br>";
 $numArray = [1, 112, 25, 36, 85];

 $pos = array_search(85, $numArray);

 echo $pos;
// ------------------------------------------------
echo "<br><br> ordenação em ordem crescente<br>";

$numArray = [1, 112, 25, 36, 85];

sort($numArray);

print_r($numArray);
// ------------------------------------------------
echo "<br><br> ordenação em ordem decrescente<br>";

$numArray = [1, 112, 25, 36, 85];

rsort($numArray);

print_r($numArray);

// ------------------------------------------------
echo "<br><br> ordenação em ordem crescente mantendo a chave<br>";

$numArray3 = [1, 112, 25, 36, 85];

asort($numArray3);

print_r($numArray3);

// ------------------------------------------------
echo "<br><br> ordenação em ordem decrescente mantendo a chave<br>";

$numArray3 = [1, 112, 25, 36, 85];

arsort($numArray3);

print_r($numArray3);

// ------------------------------------------------
echo "<br><br> destruindo um array e montando uma string<br>";

$arrayNomeCompleto = ["Edson", "Luiz", "Tiepermann", "Junior"];

print_r($arrayNomeCompleto);

$string = implode(" ", $arrayNomeCompleto);

echo "<br><br> String montada: $string";


// ------------------------------------------------
date_default_timezone_set('America/Sao_Paulo');

echo '<br>';
echo time();
echo '<br>';

echo date('D'); echo "<br>";
echo date('l');

echo '<br>';

echo date('d-m-Y');
echo '<br>';
echo date('d/m/Y H:i:s');
echo '<br>';


// ------------------------------------------------

echo "<br><br>manipulando a data, formato internacional<br>";
echo '<br>';

$data = '2023-03-01';

echo "$data data inicio do curso";
echo '<br>';

$milsegundos = strtotime($data);
echo $milsegundos;
echo '<br>';
echo date ('d-m-Y', $milsegundos);

echo '<br>';
echo '<br>';

// ------------------------------------------------
echo "<br><br>diferença entre as datas<br>";
echo '<br>';

$dataInicioAno = "2022-01-01";
$dataHj = date('Y/m/d');

$difDatas = abs((strtotime($dataInicioAno) - strtotime($dataHj)));

echo $dias = floor($difDatas / (60 * 60 * 24));






?> 