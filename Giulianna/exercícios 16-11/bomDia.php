<!-- 1 - Desenvolva um script com mensagens de saudações. 
Crie uma variável para inserir um horário e a partir do horário realizar as verificações,
se o horário for até as 12 horas, escreva Bom dia, se passar das 12 e for até as 18 horas 
escreva boa tarde e se passar das 18 horas até a 0 horas escreva boa noite (if else); -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
</head>

<body>

    <input type="number" placeholder="horario" id="hora">
    <button onclick="saudacao()">horario</button>



</body>
<script>
    function saudacao() {
        let horario = document.querySelector('#hora').value;

        window.open(`BomDiaResultado.php?horas=${horario}`);

    }
</script>

</html>