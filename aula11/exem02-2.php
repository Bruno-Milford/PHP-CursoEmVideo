<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $i = 1;
            while($i <= 5){
                $v = "num".$i;
                $url = "v".$i;
                $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
                $i++;
            }

            echo "==Valor 1: $num1==";
            echo "==Valor 2: $num2==";
            echo "==Valor 3: $num3==";
            echo "==Valor 4: $num4==";
            echo "==Valor 5: $num5==";
        ?>
    </div>
</body>
</html>