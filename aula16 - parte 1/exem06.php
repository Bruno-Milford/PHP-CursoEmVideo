<?php
    $frase = "Eu vou estudar PHP";
    $cont = str_word_count($frase, 2);
    // valor 0 vai contar as palavras 
    // valor 1 cria uma array 
    // valor 2 cria uma array aonde informa onde as palavras vão começar
    print_r($cont);
?>