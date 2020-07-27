<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto não informado";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "Tamanho não informado";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "Cor não informada";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo 03</title>
    <style>

        span.texto {
            font-size: <?php echo $tam; ?> ;
            color: <?php echo $cor; ?> ; 
        }

    </style>
</head>
<body>
    <?php
        echo "<span class='texto'>$txt</span>";
    ?>
</body>
</html>