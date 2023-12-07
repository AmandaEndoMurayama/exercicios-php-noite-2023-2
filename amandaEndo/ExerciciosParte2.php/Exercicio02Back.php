<!-- 2 - Escreva um script que pergunta ao usuário se ele deseja converter uma temperatura de grau Celsius para Farenheit ou
 vice-versa. Se ele digitar/escolher 1, é de Celsius para Farenheit, se digitar/escolher 2 é de Farenheit para Celsius, 
 outro valor mostre uma mensagem de erro. Para cada conversão, chame a função correta. -->

 <?php 
 $opcao = $_GET['opcao'];
 $valor = $_GET['valor'];

if ($opcao == 1) {
   $resultado = celsiusFare($valor, $opcao);
} else {
    $resultado = fareCelsius($valor, $opcao);
}

 function celsiusFare($valor, $opcao) {
    $resultado = $valor * 1.8 + 32;
    echo "A conversão escolhida foi a $opcao, e o resultado eh: ". number_format($resultado, 2);

 }
 
  function fareCelsius($valor, $opcao) {
    $resultado = ($valor - 32)/1.8;
    echo "A conversão escolhida foi a $opcao, e o resultado eh: ".number_format($resultado, 2);
 }

 ?>