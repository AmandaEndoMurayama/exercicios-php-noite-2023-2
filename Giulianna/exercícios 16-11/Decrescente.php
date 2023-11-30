<!-- Faça um script em PHP que leia três números inteiros
e mostre eles na ordem crescente. -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros decrescentes</title>
</head>

<body>

    <input type="number" placeholder="Numero 1" id="numero1">
    <input type="number" placeholder="Numero 2" id="numero2">
    <input type="number" placeholder="Numero 3" id="numero3">
    <button onclick="ordenar()">Ordenar</button>

</body>
<script>
    function ordenar() {
        let Numero1 = document.querySelector('#numero1').value;
        let Numero2 = document.querySelector('#numero2').value;
        let Numero3 = document.querySelector('#numero3').value;
        window.open(`DecrescenteResultado.php?numero1=${numero1}&numero2=${numero2}&numero3=${numero3}`);

    }

</script>

</html>