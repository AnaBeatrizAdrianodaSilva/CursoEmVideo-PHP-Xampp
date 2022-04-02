<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Incremento</title>
</head>
<body style="background-color: gray; font-family: Arial, sans-serif; font-size: 1.1em;">
    <?php
        
        $atual = $_GET['aa'];
        //echo "O ano atual é $atual e o ano anterior e ".$atual--; Realização da incrementação de forma errada, resultou em erro. O pós-decremento copiou o ano atual para diminuir somente na próxima linha
        echo "O ano atual é $atual e o ano anterior é ".--$atual; // o pré-decremento diminui um ano primeiro, para depois mostrar na tela
    ?>
</body>
</html>