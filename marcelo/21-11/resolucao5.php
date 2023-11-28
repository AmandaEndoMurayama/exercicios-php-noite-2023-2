<?php

$codigo = $_GET["num1"];

// $item100 = "Código: 100<br>Produto: Cachorro quente<br>Preço Unitário: R$ 12,70";
// $item101 = "Código: 101<br>Produto: Bauru Simples<br>Preço Unitário: R$ 4,00";
// $item102 = "Código: 102<br>Produto: Bauru com ovo <br>Preço Unitário: R$ 4,60";
// $item103 = "Código: 103<br>Produto: Hambúrguer<br>Preço Unitário: R$ 15,00";
// $item104 = "Código: 104<br>Produto: Cheeseburger<br>Preço Unitário: R$ 13,50";
// $item05 = "Código: 05<br>Produto: Refrigerante<br>Preço Unitário: R$ 4,50";

// if ($codigo == "100") {
//     echo "$item100";
// } elseif ($codigo == "101") {
//     echo "$item101";
// } elseif ($codigo == "102") {
//     echo "$item102";
// } elseif ($codigo == "103") {
//     echo "$item103";
// } elseif ($codigo == "104") {
//     echo "$item104";
// } elseif ($codigo == "05") {
//     echo "$item05";
// }

switch ($codigo) {
    case "100":
        echo "Código: 100<br>Produto: Cachorro quente<br>Preço Unitário: R$ 12,70";
        break;
    case "101":
        echo "Código: 101<br>Produto: Bauru Simples<br>Preço Unitário: R$ 4,00";
        break;
    case "102":
        echo "Código: 102<br>Produto: Bauru com ovo <br>Preço Unitário: R$ 4,60";
        break;
    case "103":
        echo "Código: 103<br>Produto: Hambúrguer<br>Preço Unitário: R$ 15,00";
        break;
    case "104":
        echo "Código: 104<br>Produto: Cheeseburger<br>Preço Unitário: R$ 13,50";
        break;
    case "05":
        echo "Código: 05<br>Produto: Refrigerante<br>Preço Unitário: R$ 4,50";
        break;
    default:
        echo "Código incorreto";
        break;
}

?>