<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 Integração HTML + PHP</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>
    <?php
        $valor = $_GET["v"];
        echo "O valo enviado foi " .$valor. ".";
        // $rq = sqrt($valor); Conta de raiz quadrada em uma variável
        echo "<br> O resultado da raiz quadrada de " .$valor. " é " .number_format(sqrt($valor), 2, ",", "."). "."; // Conta da raiz quadrada direto na frase. Usado o number_format para trocar o poto pela vírgula e fazer com que mostre apenas os dois primeiros número depois da vírgula.
    ?>
    <br>
    <br>
    <a href="01exercicio.html" class="link">
        Voltar
    </a>
</body>
</html>