<?php
    $nome = "Guanabara";
    $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
    $novo1 = str_pad($nome, 30, " ", STR_PAD_LEFT);
    $novo2 = str_pad($nome, 30, " ", STR_PAD_BOTH);
    print("Meu professor $novo é lindo");
    print("Meu professor $novo1 é lindo");
    print("Meu professor $novo2 é lindo");
?>