<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo 01</title>
</head>
<body>
    <?php
        $num = isset($_GET["num"]) ? $_GET["num"] : "Digte um valor";
        $oper = isset($_GET["oper"]) ? $_GET["oper"] : "Selecione uma operação";
        
        switch($oper) {
            case 1:
                $result = $num * 2;
            break;
            case 2: 
                $result = $num ^ 3;
            break;
            case 3:
                $result = sqrt($num);
            break;
            default:
                echo "ERROR !!!!! ALERT !!!!";
            break;
        }

        echo "O resultado da operação selecionada é $result";
    ?>

    <a href="exem01.html">Voltar</a>
</body>
</html>