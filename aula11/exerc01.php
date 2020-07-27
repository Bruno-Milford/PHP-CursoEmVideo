<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
        $fim = isset($_GET["final"]) ? $_GET["final"] : 0;
        $in = isset($_GET["incremento"]) ? $_GET["incremento"] : 0;

        while($inicio <= $fim) {
            echo "</br>" .$inicio. "</br>";
            $inicio += $in;
        }

        while($inicio >= $fim) {
            echo "</br>". $inicio. "</br>";
            $inicio -= $in;
        }
    ?>
</body>
</html>