<!-- 2 - Insira seu nome na tela, e crie um script com função para retornar um array onde cada posição do array contenha uma parte do seu nome. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="">
        <p><b>Escreva seu nome</b></p>
        <input type="text" id="nome" placeholder="Digite seu nome">
         <button onclick="enviarNome()">Gerar</button>
         <script>
        function enviarNome() {

      let nome = document.getElementById('nome').value;

       window.open(`Exercicio2Back.php?nome=${nome}`);
        }
    </script>
    </form>
</body>
</html>