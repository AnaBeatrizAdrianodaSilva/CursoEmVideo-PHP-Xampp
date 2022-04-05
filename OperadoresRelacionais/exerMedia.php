<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da média usando PHP</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2)/2;
        echo "A média entre " .$nota1. " e " .$nota2. " é " .number_format($m, 2, ",", ".");

        echo "<br>";
        echo "Você foi " .$sit = ($m >= 7)?"APROVADO":"REPROVADO"; // Método feito por concatenação.
        
        //$sit = ($m >= 7)?"APROVADO":"REPROVADO"; Se a minha média for igual ou maior que 7, você foi APROVADO, se não você REPROVADO.
    ?>
</body> 
</html>