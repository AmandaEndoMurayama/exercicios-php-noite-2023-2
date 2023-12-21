<!-- 4 - Crie um sorteador dinâmico com três entrada na tela, sendo elas, a primeira e a segunda entrada o gap de números que irá gerar, 
e a terceira entrada a quantidade de números que serão sorteados, e apresente na tela todos os resultados. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h2>Insira dois números<h2>
    <form>
        <input type="number" placeholder= "Numero 1" id="num1">
        <input type="number" placeholder= "Numero 2" id="num2">
        <input type="number" placeholder= "Numero 3" id="quantidade">

        <button onclick="sortear()" type="submit">Sortear</button>
    </form>
    <script>
        function sortear() {
            let num1 = document.getElementById('num1').value;
            let num2 = document.getElementById('num2').value;
            let quantidade = document.getElementById('quantidade').value;

            window.open(`Exercicio4Back.php?num1=${num1}&&num2=${num2}&&quantidade=${quantidade}`);
        }
   </script>   
</head>
<body>
    
</body>
</html>