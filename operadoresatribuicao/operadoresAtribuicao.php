<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body style = "background-color: gray; font-family: Arial, sans-serif; font-size: 1.1em;">
    <?php

        echo "<h1>Aumento de Preço</h1>";
        $preco = $_GET["p"];
        echo "O preço do produto é R$".number_format($preco, 2, ",", ".");
        //$preco = $preco + ($preco*10/100); Modo antigo, feito a mão
        $preco += $preco*10/100; // Feito com os operadores de Atribuição. O $preco recebe ele mesmo, mais 10% ($preco*10/100)
        echo "<br> E o novo preço com 10% de aumento será de R$".number_format($preco, 2, ",", ".");

        echo "<h1>Desconto do Preço</h1>";
        $precoDesconto = $_GET["pd"];
        echo "O preço do produto é R$".number_format($precoDesconto, 2, ",", ".");
        //$preco = $preco + ($preco*10/100); Modo antigo, feito a mão
        $precoDesconto -= $precoDesconto*10/100; // Feito com os operadores de Atribuição. O $preco recebe ele mesmo, mais 10% ($preco*10/100)
        echo "<br> E o novo preço com 10% de aumento será de R$".number_format($precoDesconto, 2, ",", ".");
    ?>
</body>
</html>