<!-- Faça um programa, com uma função que necessite de três argumentos, e que forneça 
a soma desses três argumentos através de uma função. Seu script também deve fornecer a média dos três números,
 através de uma segunda função que chama a primeira. Obs. 
faça uma validação para não deixar o usuário enviar inputs vazios. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="number" id="valor1" placeholder="Digite o primeiro valor">
        <input type="text" id="valor2" placeholder="Digite o segundo valor">
        <input type="text" id="valor3" placeholder="Digite o terceiro valor">
        <button onclick="evtEnviarNumeros()">Verificar</button>
    </form>
</body>
<script>
    function evtEnviarNumeros() {
        let valor1 = document.querySelector('#valor1').value;
        let valor2 = document.querySelector('#valor2').value;
        let valor3 = document.querySelector('#valor3').value;

        let valida = validarCampos(valor1, valor2, valor3);


        if (valida == true) {
            window.open('Exercicio01Back.php?valor1=' + valor1 + '&valor2=' + valor2 + '&valor3=' + valor3);
        }
    }

    function validarCampos(valor1, valor2, valor3) {

        if (valor1 == '') {
            alert('Preencha todos os campos');
            document.querySelector('#valor1').focus();
            return false;
        } else if (valor2 == '') {
            alert('Preencha todos os campos');
            document.querySelector('#valor2').focus();
            return false;
        } else if (valor3 == '') {
            alert('Preencha todos os campos');
            document.querySelector('#valor3').focus();
            return false;
        } else {
            return true;
        }
    }
</script>

</html>