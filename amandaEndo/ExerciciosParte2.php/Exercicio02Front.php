<!-- 2 - Escreva um script que pergunta ao usuário se ele deseja converter uma temperatura de grau Celsius para Farenheit ou
 vice-versa. Se ele digitar/escolher 1, é de Celsius para Farenheit, se digitar/escolher 2 é de Farenheit para Celsius, 
 outro valor mostre uma mensagem de erro. Para cada conversão, chame a função correta. -->
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="">
    <p><b>Para converter graus Celsius para Farenheit selecione 1 ou Farenheit para Celsius selecione 2</b></p>
   <p> 1. Celsius para Farenheit <input type="radio" name="opcao" value="1"> <br/><p>
   <p> 2. Farenheit para Celsius <input type="radio" name="opcao" value="2"> <br/><p>
    
   <input type="text" id="valor" placeholder="Digite um valor">
   <button onclick="enviarValor()">Converter</button>
    </form>
</body>
<script>
    function enviarValor() {
        let opcao = 0;
        let valor = 0;
        opcao = document.querySelector('input[name=opcao]:checked').value
        valor = document.querySelector('#valor').value;

    
        if (opcao != 0 && valor != 0) {
            window.open(`Exercicio02Back.php?valor=${valor}&opcao=${opcao}`);
        } else {
            alert("Preencha todas as informações");
        }
    }
</script>
</html>