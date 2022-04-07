<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 de if else</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>
    <?php
        $anoNasc = $_GET["anoNasc"];
        $anoV = date("Y") - $anoNasc;

        if ($anoV >= 18) {
            echo "Você tem ".$anoV." então pode votar e dirigir.";
        } else {
            echo "Você tem ".$anoV." então não pode votar e dirigir.";
        };
    ?>
</body>
</html>