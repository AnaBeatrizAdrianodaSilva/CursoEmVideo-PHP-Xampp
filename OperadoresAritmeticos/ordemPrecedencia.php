<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background-color: gray; font-family: Arial, sans-serif; font-size: 1.1em;">
    <?php
        echo "<h1>Ordem de Precedência dos Operadores Aritméticos</h1>";

        $n1 = 3;
        $n2 = 2;
        $m = ($n1 + $n2) / 2; // Nessa conta, o que estiver dentro do parentese será resolvido primeiro, para depois efetuar a divisão.
        echo "A média vale $m";
    ?>
</body>
</html>