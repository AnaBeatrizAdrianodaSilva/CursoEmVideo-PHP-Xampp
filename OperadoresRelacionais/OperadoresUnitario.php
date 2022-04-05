<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Unitário </title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2 <br>";
        $r = ($tipo == "s")? $n1 + $n2 : $n1 * $n2; // Se o tipo for "s", a variável $r irá fazer uma soma, mas se o tipo não for "s", a variável $r fará uma  multiplicação.
        echo "O resultado será $r";
    ?>
</body>
</html>