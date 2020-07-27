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
        $num = isset($_GET["num"]) ? $_GET["num"] : 1;
        echo "<h2>Tabuada do $num</h2>";

        $cont = 1;
        $multi = 1;

        do {
            $multi = $num * $cont;
            echo "$num x $cont = <b> " . $multi . "</b></br>";   
            $cont++;         
        } while($cont <= 10);
    ?>

    <p><a href="exerc01.php">Voltar</a></p>
</body>
</html>