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
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[NÃO INFORMADO]"; // isset() significa: se foi configurado
        $ano = isset($_GET["ano"])?$_GET["ano"]:0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[SEM SEXO]";
        $idade = date("Y") - $ano; // o código date("") faz com que diga o ano em que você está. Colocar o "y" minúsculo faz com que aparece o dois números do ano, no caso o 22 de 2022, o "Y" maiúsculo faz com que apareça o ano inteiro, no caso 2022.
        echo $nome. " é " .$sexo. " e tem " .$idade. " anos.";
    ?>
    <br>
    <br>
    <a href="exercicio02.html" class="link">
        Voltar
    </a>
</body>
</html>