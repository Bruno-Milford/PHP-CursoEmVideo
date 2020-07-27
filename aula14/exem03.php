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
        function soma() {
            $p = func_get_args();
            $tot = func_num_args();

            $s = 0;
            for($i = 0; $i < $tot; $i++) {
                $s += $p[$i];
            }
            return $s;
        }

        $result = soma(3, 5, 2);
        echo "<p>A soma dos valores é $result</p>";
    ?>
</body>
</html>