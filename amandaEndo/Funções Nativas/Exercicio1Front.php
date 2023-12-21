<!-- 1 - Crie um script para inserir o seu nome completo, e um campo de opções para escolher letras maiúsculas ou minúsculas, 
em seguida crie uma função para deixar todo o seu nome em maiúsculo e uma para deixar todo o seu nome em minúsculo, e utilize 
a função e transforme seu nome de acordo com a escolha em tela realizada.. -->
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
        <p> Maiusculo <input type="radio" name="opcao" value="1" checked> <br /><p>
        <p> Minusculo <input type="radio" name="opcao" value="2"> <br /><p>
            <button onclick="enviarNome()">Gerar</button>

    </form>
    <script>
        function enviarNome() {
            // alert(nome)
            let nome = document.getElementById('nome').value;
            let opcao = document.querySelector('input[name=opcao]:checked').value

            window.open(`Exercicio1Back.php?nome=${nome}&opcao=${opcao}`);
        }
    </script>
</body>

</html>