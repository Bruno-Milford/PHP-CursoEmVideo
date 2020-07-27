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
        echo "<br> você nasceu em $ano e tera $idade anos.";

        if($idade >= 18) {
            echo "<br> O seu voto é obrigatorio";
            echo "<br> Você já pode tirar CNH <br>";
        } else {
            echo "<br> Seu voto é opcional";
            echo "<br> Você não pode tirar CNH <br>";
        }
    ?>

    <a href="exem01.html">Voltar</a>
</body>
</html>