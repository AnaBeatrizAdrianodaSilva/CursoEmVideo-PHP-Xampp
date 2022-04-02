<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas em PHP</title>
</head>
<body style = "background-color: gray; font-family: Arial, sans-serif; font-size: 1.1em;">
    <?php

        echo "<h1>Valor Absoluto</h1>";
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        $v3 = $_GET["z"];

        // echo "<h2>Valores recebidos $v1 e $v2</h2>";

        echo "O valor absoluto de $v2 é " .abs($v2); // Nesse caso, o valor absoluto será 3, porque o comando abs() irá retirar o menos do -3.

        echo "<h1>Potenciação</h1>";
        echo "O valor de $v1<sup>$v2</sup> é " .pow($v1, $v2); // Depois da vírgula é colocado o valor que eleva o outro.

        echo "<h1>Raiz Quadrada</h1>";
        echo "A Raiz de $v1 é " . sqrt($v1); // Essa função irá achar a raiz quadrada do valor dentro do parentese.

        echo "<h1>Arredondamento</h1>";
        echo "O arredondamento de $v3 é " .round($v3); // Existe mais duas funções que servem para o arredondamento: ceil e floor, o ceil arredonda para cima independente do valor após a vírgula, e o floor arredonda para baixo independente do valor após a vírgula.

        echo "<h1>Valor Inteiro</h1>";
        echo "O valor inteiro de $v3 é " .intval($v3); // É pego o número inteiro do valor real.

        echo "<h1>Formatação</h1>";
        $n1 = 1500;
        echo "O valor de $n1 em moeda é R$" .number_format($n1,2, ",", "."); // O segundo parâmetro diz quantas casas você quer depois da vírgula, o terceiro parâmetro diz qual é separador que você deseja, se é o ponto ou a vírgula, no terceiro parâmetro diz qual é o separador que você deseja nas casas de milhar, se é o ponto ou a vírgula.
    ?>
</body>
</html>