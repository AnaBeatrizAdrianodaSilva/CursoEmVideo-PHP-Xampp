<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis de Variáveis</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <?php
        $x = "abc";
        $$x = "def";
        echo "O conteúdo da variável X é $x";
        echo "<br>";
        echo "A variável ABC criada recebeu o valor $abc"; // A variável criada recebeu o nome do valor atribuído a primeira variável.
    ?>
</body>
</html>