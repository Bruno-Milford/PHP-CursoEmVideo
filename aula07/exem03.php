<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 03</title>
</head>
<body>
    <?php 
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $m = ($n1 + $n2) / 2;
        echo "A media entre $n1 e $n2 é $m <br>";
        $sit = ($m < 6) ? "Reprovador" : "Aprovado";
        echo "A situação do aluno é $sit"
    ?>
</body>
</html>