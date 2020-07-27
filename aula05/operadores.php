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
            $n1 = 3;
            $n2 = 2;
            $s = $n1 + $n2;

            echo "A soma entre $n1 e $n2 e igual a $s";
        ?> 

        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            echo "<h2>Valores recebidos: $n1 e $n2</h2>";
            $m = ($n1 + $n2) / 2;

            echo "<br/> A soma vale ". ($n1 + $n2);
            echo "<br/> A subtração vale ". ($n1 - $n2);
            echo "<br/> A multiplicação vale ". ($n1 * $n2);
            echo "<br/> A divisão vale ". ($n1 / $n2);
            echo "<br/> O modulo vale ". ($n1 % $n2);
            echo "<br/> A media vlae $m";
        ?>
    </div>
</body>
</html>