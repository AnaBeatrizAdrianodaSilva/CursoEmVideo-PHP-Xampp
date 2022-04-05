<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igual e Idêntico</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <?php
        $a = 3;
        $b = "3";
        $rIgual = ($a == $b) ? "SIM" : "NÃO"; // O operador de igual não leva em conta qual o tipo do valor, se é string ou number, etc...
        echo "As variáveis A e B são iguais? " .$rIgual;
        echo "<br>";
        $c = 4;
        $d = "4";
        $rIden = ($c === $d) ? "SIM" : "NÃO"; // O operador de idêntico leva em conta o tipo do valor de uma variável, se é string ou number, etc...
        echo "As variáveis C e D são idênticas? " .$rIden;
    ?>
</body>
</html>