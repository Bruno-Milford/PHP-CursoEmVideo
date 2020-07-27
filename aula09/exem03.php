<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio 01</title>
</head>
<body>
    <?php
        $n1 = isset($_GET["n1"]) ? $_GET["n1"] : "Informe a nota 1";
        $n2 = isset($_GET["n2"]) ? $_GET["n2"] : "Informe a nota 2";

        $media = ($n1 + $n2) / 2;
        echo "<br> A media entre $n1 e $n2 é $media. <br>";

        if ($media >= 6) {
            echo "O aluno foi APROVADO <br>";
        } else {
            echo "O aluno foi REPROVADO <br>";
        }
    ?>

    <a href="exem03.html">Voltar</a>
</body>
</html>