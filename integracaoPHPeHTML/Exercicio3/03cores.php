<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 de PHP</title>
    <link rel="stylesheet" href="../../CSS/style.css">
    <?php
        $txt = isset($_GET["t"])?$_GET["t"]:"[TEXTO GENÉRICO]";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#0000000";

        // echo "$txt, $tam, $cor";
    ?>                  

    <!-- Para o STYLE funcionar tem que colocar a super tag PHP em cima do style -->

    <style>
        .texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>

</head>
<body>
    <?php
        echo"<span class='texto'>$txt</span>";
    ?>
    <br>
    <br>
    <a href="exercicio03.html" class="link">Voltar</a>
</body>
</html>