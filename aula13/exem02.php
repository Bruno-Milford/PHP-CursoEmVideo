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
        <form method="get" action="exem02-1.php">
            <select name="num">
                <?php
                    for($c = 1; $c <= 10; $c++) {
                        echo "<option>$c</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Gerar Tabuada">
        </form>
    </div>
</body>
</html>