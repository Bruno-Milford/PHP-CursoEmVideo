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
        $c = 1;

        do {
            echo "$c ";
            $c += 2;
        } while($c <= 20);

        $b = 15;

        do {
            echo "$b ";
            $b--;
        } while($b >= 1);
    ?>
</body>
</html>