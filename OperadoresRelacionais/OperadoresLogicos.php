<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <?php
        $ano = $_GET["ano"];
        $idade = 2022 - $ano;
        echo "Seu ano de nascimento é " .$ano." , então sua idade em 2022 é " .$idade. " anos. <br>";
        $tipo = $idade >= 18 && $idade < 65?"VOTO OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
        echo "E dessa forma seu voto é " .$tipo. ".";


    ?>
</body>
</html>