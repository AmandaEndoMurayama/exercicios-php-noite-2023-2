<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="number" placeholder="Código do produto" id="num1">
        <button onclick="calcular()" type="submit">verificar</button>
    </form>

    <script>
        function calcular() {
            let numero1 = document.getElementById('num1').value;
            window.open(`resolucao5.php?num1=${numero1}`);
        }                                               
    </script>

</body>

</html>

<!-- O cardápio da lanchonete é dado pela tabela abaixo, insira na tela o código do produto, e retorno o produto e seu valor

Código Produto Preço Unitário (R$) 100 Cachorro quente R$ 12,70 101 Bauru Simples R$ 4,00 102 Bauru com ovo R$ 4,60 103
Hambúrguer R$ 15,00 104 Cheeseburger R$ 13,50 05 Refrigerante R$ 4,50 -->