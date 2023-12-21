<!-- 5 - Escreva uma programa que receba a data de nascimento, calcule quantos dias de vida você já está abrilhantando esse mundão. -->
<?php

$data = $_GET['data'];
$dataHoje = date('Y/m/d');

$difDatas = abs((strtotime($data) - strtotime($dataHoje)));

echo $dias = floor($difDatas / (60 * 60 * 24) );


?>