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
        <form method="GET" action="exem02-2.php">
            <?php
                $c = 1;
                while($c <= 5) {
                    echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br><br>";
                    $c++;
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>