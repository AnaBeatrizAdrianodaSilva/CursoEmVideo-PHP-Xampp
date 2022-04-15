<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/style.css">
    <title>media | PHP</title>
</head>
<body>
    <?php

        include ("style.php"); // Conectar um arquivo sw php com css com outro arquivo php
        
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $media = ($nota1 + $nota2) / 2;
        $media = number_format($media, 1, ".", ",");

        if ($media < 5) {
            $situacao = '<span class="texto">REPROVADO</span>';
        } else if ($media >= 5 & $media < 7) {
            $situacao = "<span class='texto'>RECUPERAÇÂO</span>";
        } else {
            $situacao = '<span class="texto">APROVADO</span>';
        }

        echo 'A média entre <span class="nota">'.$nota1.'</span> e <span class="nota">'.$nota2.'</span> é igual a <span class="nota">'.$media.'</span>';
        echo "<br>";
        echo 'Situação do aluno: '.$situacao;
    ?>
</body>
</html>