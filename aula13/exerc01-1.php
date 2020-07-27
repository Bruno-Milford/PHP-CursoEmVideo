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
        $primo = isset($_GET["primo"]) ? $_GET["primo"] : 0 ;
        $cont = 0;

        for($i = 1; $i <= $primo; $i++) {
            if($primo % $i == 0) {
                $cont++;
            } 
        }

        if($cont == 2) {
            echo "O número $primo é primo";
        } else {
            echo "O número $primo não é primo";
        }
    ?>
</body>
</html>