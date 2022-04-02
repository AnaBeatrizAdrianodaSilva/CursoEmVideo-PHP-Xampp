<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Referenciadas</title>
</head>
<body style="background-color: gray; font-family: Arial, sans-serif; font-size: 1.1em;">
    <?php
        echo "<h1>Normal</h1>";
        $a = 3;
        $b = $a;
        $b += 5;
        echo "A variável A vale $a";
        echo "<br>";
        echo "A variável B vale $b";

        echo "<h1>Variável Referenciada</h1>";
        $c = 3;
        $d = &$c; // A variável $d ficou ligada com a variável $d,logo ambas possuem o mesmo valor, e o que acontecer com uma acontece com as duas.
        $c += 5;
        echo "A variável C vale $c";
        echo "<br>";
        echo "A variável D vale $c";
    ?>
</body>
</html>