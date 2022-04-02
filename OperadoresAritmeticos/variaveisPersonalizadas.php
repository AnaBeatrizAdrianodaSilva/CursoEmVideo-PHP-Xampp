<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Personalizadas</title>
</head>
<body style = "background-color: gray; font-family: Arial, sans-serif; font-size: 1.1em;">
    <?php
        $n1 = $_GET["a"]; // Esse $_GET pega o valor que está na URL e joga dentro da variável $n1
        $n2 = $_GET["b"];

        echo "<h2>Valores recebidos: $n1 e $n2</h2>";

        echo "A soma vale ". $n1 + $n2;
        echo "<br>";
        echo "A divisão vale ". $n1 - $n2;
        echo "<br>";
        echo "A multiplicação vale ". $n1 * $n2;
        echo "<br>";
        echo "A divisão vale ". $n1 / $n2;
        echo "<br>";
        echo "O resto da divisão vale ". $n1 % $n2;
        echo "<br>";
        echo "A média vale ".($n1 + $n2) / 2;
    ?>
</body>
</html>