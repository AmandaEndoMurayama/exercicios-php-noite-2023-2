<!-- 3 - Crie uma função que receba dois valores inteiros como argumentos e retorne se os números são divisíveis, 
se forem divisíveis verifique se cada número digitado é par ou ímpar e mostre na tela também. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="">
   <h2>Verifique se os números são divisíveis<h2>
   <input type="number" id="valor1" placeholder="Digite o primeiro valor">
   <input type="text" id="valor2" placeholder="Digite o segundo valor">

   <button onclick="enviarValores()">Verificar</button>
    </form>
</body>
<script>
    function enviarValores() {
        // let valor = 0;
    
     let valor1 = document.querySelector('#valor1').value;
     let valor2 = document.querySelector('#valor2').value;

     window.open(`Exercicio03Back.php?valor1=${valor1}&valor2=${valor2}`);
    }
</script>
</html>