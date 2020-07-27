<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio 01</title>
</head>
<body>
    <div>
        <h2>Tabuada</h2>
        <form method="get" action="exerc01-1.php">
            <label for="itam">Número: </label>
            <select name="num" id="itam">
                <?php
                    $cont = 1;

                    while($cont <= 10) {
                        echo "<option value='$cont'>$cont</option><br/>";
                        $cont++;
                    }

                    echo $cont;
                ?>
            </select>
            <br><br>
            <button style="vertical-align:middle"><span>Gerar</span></button>
        </form>
    </div>
</body>
</html>