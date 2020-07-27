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
        $dia = isset($_GET["ds"]) ? $_GET["ds"] : 0;

        switch($dia) {
            case 2:
            case 3:
            case 4: 
            case 5:
            case 6:
                echo "Levante e vai estudar :)";
            break;
            case 7:
            case 8:
                echo "Descanse, peqeuno gafanhoto ;)"; 
            break;
            default:
                echo "Dia da semana invalido";
        }
    ?>

    <br/><a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>