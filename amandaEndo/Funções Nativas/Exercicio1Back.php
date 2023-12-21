<!-- 1 - Crie um script para o seu nome completo, e um campo de para letras escolher maiúsculas realizada ou minúsculas, 
em cry uma função para o seu nome em nome emmaiúsculo e uma para deixar o seu nome em nome em minúsculo, e utilizar uma e transforme 
seu nome de acordo em uma tela escolha. -->
<?php
$nome = $_GET['nome'];
$opcao = $_GET['opcao'];

if ($opcao == 2) {
  echo strtolower($nome);
} else {
   echo strtoupper($nome);
}


?>  