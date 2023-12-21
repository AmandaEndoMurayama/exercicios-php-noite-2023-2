<!-- 7 - Faça um código onde irá gerar 5 números aleatórios. Com esses números gerados, monte um array e caso a primeira posição seja  -->
<!-- menor que 5, remova o primeiro valor. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Insira um número<h2>
    <form>
        <input type="number" placeholder= "Numero 1" id="num1">

        <button onclick="gerar()" type="submit">Gerar</button>
    </form>
    <script>
        function gerar() {
            let num1 = document.getElementById('num1').value;

            window.open(`Exercicio7Back.php?num1=${num1}`);
        }
   </script>   
</body>
</html>