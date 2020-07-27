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
        function teste($x) {
            $x += 2;
            echo "<p>$x</p>";
        }

        $a = 3;
        teste($a);
        echo "<p>$a</p>";
    ?>
</body>
</html>