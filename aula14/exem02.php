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
        function soma ($a, $b) {
            return $a + $b; 
        }

        $res = soma(3, 4);
        echo "<p>O resultado da soma é $res</p>";
    ?>
</body>
</html>