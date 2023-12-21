<!-- 5 - Escreva uma programa que receba a data de nascimento, calcule quantos dias de vida você já está abrilhantando esse mundão. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="">
        <p><b>Escreva sua data de nascimento</b></p>
        <input id="date" type="date" />
         <button onclick="enviarData()">Verificar</button>
         <script>
        function enviarData() {

      let data = document.getElementById('date').value;

       window.open(`Exercicio5Back.php?data=${data}`);
        }
    </script>
    </form>
</body>
</html>