<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 Integração HTML e PHP</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>
    <?php
        $nome = $_GET["nome"];
        $ano = $_GET["ano"];
        $sexo = $_GET["sexo"];
        $idade = date("Y") - $ano; // o código date("") faz com que diga o ano em que você está. Colocar o "y" minúsculo faz com que aparece o dois números do ano, no caso o 22 de 2022, o "Y" maiúsculo faz com que apareça o ano inteiro, no caso 2022.
        echo $nome. " tem " .$idade. " anos.";
    ?>
    <br>
    <br>
    <a href="exercicio02.html" class="link">
        Voltar
    </a>
</body>
</html>