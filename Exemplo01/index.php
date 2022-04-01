<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Exemplo PHP</title>
    <style>
        body {
            background-color: gray;
        }
        
        h2 {
            color: #80a2ff;
            text-shadow: 1px 1px 1px black;
        }

        .teste {
            background-color: white;
        }
    </style>
</head>
<body>
    <h1>Testando PHP</h1>
    <?php
        echo '<h2 class="teste">Olá, <br> Mundo!</h2>';
    ?>
</body>
</html>