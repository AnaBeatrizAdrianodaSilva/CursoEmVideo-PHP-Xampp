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

        if ($anoV < 16) {
            $v = 'você não pode votar';
            $d = 'você não pode dirigir';
        } else {
            if ($anoV >= 16 && $anoV < 18) {
                $v = 'seu voto é opcional';
                $d = 'você não pode dirigir';
            } else if ($anoV >= 65) {
                   $d = 'você pode dirigir';
                    $v = 'seu voto é opcional';
         } else {
            $v = 'seu voto é obrigatório';
            $d = 'você pode dirigir';
         } 
        }; 
        echo 'Você tem '.$anoV.', então '.$v.' e '.$d;
    ?>
</body>
</html>