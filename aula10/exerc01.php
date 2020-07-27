<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercico 01</title>
</head>
<body>
    <?php
        $estado = isset($_GET["estado"]) ? $_GET["estado"] : 0;
        
        switch($estado) {
            case "ac":
            case "am":
            case "ap":
            case "pa":
            case "ro":
            case "rr":
            case "to":
                echo "<h2 align='center'>Sua região é a Norte</h2>";
            break;
            case "al":
            case "ba":
            case "ce":
            case "ma":
            case "pi":
            case "pe":
            case "pb":
            case "rn":
            case "se":
                echo "<h2 align='center'>Sua região é a Nordeste</h2>";
            break;
            case "pr":
            case "rs":
            case "sc":
                echo "<h2 align='center'>Sua região é a Sul</h2>";
            break;
            case "es":
            case "mg":
            case "rj":
            case "sp":
                echo "<h2 align='center'>Sua região é a Sudeste</h2>";
            break;
         }
    ?>
</body>
</html>