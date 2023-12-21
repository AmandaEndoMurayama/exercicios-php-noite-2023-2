<!-- 2 - Insira seu nome na tela, e crie um script com função para retornar um array onde cada posição do array contenha uma parte do seu nome. -->
<?php
$nome = $_GET['nome'];
$arrayNome = explode(" ",$nome); 
print_r($arrayNome);
?>  