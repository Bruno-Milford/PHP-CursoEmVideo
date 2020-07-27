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
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[nome não informado]"; 
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sexo não informado]";

        $idade = date("Y") - $ano;
        echo "$nome e $sexo e tem $idade anos.";
    ?>
    <a href="exem02.html">Voltar</a>
</body>
</html>