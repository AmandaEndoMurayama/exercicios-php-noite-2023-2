<!-- Desenvolva um script que recebe duas notas de um aluno.
Em seguida deve ser calcular a média do aluno e dar o seguinte
resultado: A mensagem "Aprovado", se a média alcançada for maior
ou igual a seis; A mensagem "Reprovado", se a média for menor 
do que seis; A mensagem "Aprovado com Distinção", se a média for 
igual a dez. -->

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="number" placeholder="primeiro bimestre" id="Nota1">
    <input type="number" placeholder="segundo bimestre" id="Nota2">
    <button onclick="calcular()" >Calcular Média</button>

</body>
<script>
    function calcular() {
        let bimestre1 = document.querySelector('#Nota1').value;
        let bimestre2 = document.querySelector('#Nota2').value;
        window.open(`NotasResultado.php?bimestre1=${bimestre1}&bimestre2=${bimestre2}`);


    }
</script>

</html>