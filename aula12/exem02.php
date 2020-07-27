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
        $val = isset($_GET["val"]) ? $_GET["val"] : 1;
        echo "<h2>Calculando o fatorial de $val</h2>";

        $c = $val;
        $fat = 1;

        do{
            $fat = $fat * $c;
            $c--;
        } while($c >= 1);
        echo "<h3>$val != $fat</h3>";
    ?>

    <p><a href="exem02.html">Voltar</a></p>
</body>
</html>