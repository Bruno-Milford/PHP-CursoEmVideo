<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo 01</title>
</head>
<body>
    <?php
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : "Informe a sua data de nascimento";
        $idade = date('Y') - $ano;
        echo "<br> você nasceu em $ano e tera $idade anos. <br>";

        if($idade < 16) {
            echo "Você não pode votar. <br>";
        } else if ($idade >= 16 && $idade < 18 || $idade > 65) {
            echo "O seu voto é opicional. <br>";
        } else {
            echo "O seu voto é obrigatorio. <br>";
        }
    ?>

    <a href="exem02.html">Voltar</a>
</body>
</html>