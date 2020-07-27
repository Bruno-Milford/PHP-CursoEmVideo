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
        /*Esse exerc pretende demonstrar o uso de operadores
        de incremtno e decremento*/
        $atual = $_GET["aa"]; // essa linha vai pegar o ano na URL
        echo "O ano atual é $atual e o ano anteior é ". --$atual;
    ?>
</body>
</html>