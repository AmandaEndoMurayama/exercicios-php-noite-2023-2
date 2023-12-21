<!-- Escreva um código onde o usuário possa escolher um dos arrays abaixo e selecionar se ele quer ordenar de maneira crescente ou 
de maneira decrescente. Separe as ordenações em funções diferentes e chame elas dependendo da escolha.
 Array1[2, 90, 100, 1, 4, 7] Array2[3, 7, 13, 87, 1, 2, 69] -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 <form action="">
        <p><b>Escolha uma opção</b></p>
        <p> 
            2, 90, 100, 1, 4, 7 
            <input type="radio" name="opcao" value="1" checked><br/>
        <p>
        <p>
            3, 7, 13, 87, 1, 2, 69
            <input type="radio" name="opcao" value="2"><br/>
        <p>
        <p><b>Ordenar crescente ou decrescente</b></p>
        <p> 
            Crescente
            <input type="radio" name="opcao2" value="3" checked> <br />
        <p>
        <p> 
            Decrescente 
            <input type="radio" name="opcao2" value="4"> <br />
        <p>

            <button onclick="enviarArray()">Gerar</button>

    </form>
    <script>
        function enviarArray() {
            let opcao = document.querySelector('input[name=opcao]:checked').value
            let opcao2 = document.querySelector('input[name=opcao2]:checked').value

            window.open(`Exercicio6Back.php?opcao=${opcao}&&opcao2=${opcao2}`);
        }
    </script>
 </body>
 </html>