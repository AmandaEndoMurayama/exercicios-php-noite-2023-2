<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="number" placeholder="numero 1" id="num1">
        <input type="text" placeholder="operação" id="calculo">
        <input type="number" placeholder="numero 2" id="num2">
        <button onclick="calcular()" type="submit">calcular</button>
    </form>

    <script>
        function calcular() {
            let numero1 = document.getElementById('num1').value;
            let calcular = document.getElementById('calculo').value;
            let numero2 = document.getElementById('num2').value;


            window.open(`resolucao4.php?num1=${numero1}&&calc=${calcular}&&num2=${numero2}`);
        }                                               
    </script>

</body>

</html>

<!-- 4 - Desenvolva um script calculadora com os 4 operadores somar, subtrair, dividir e multiplicar. -->