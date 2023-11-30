<?php
$Bimestre1 = $_GET["bimestre1"];
$Bimestre2 = $_GET["bimestre2"];
$Soma = $Bimestre1 + $Bimestre2;
$Media = $Soma / 2;

if ($Media >= 6 & $Media < 10) {
    echo "Aprovado!!";
}

if ($Media >= 10) {
    echo "Aprovado com distinção";
}

if ($Media < 6) {
    echo "Reprovado!!";
}
?>