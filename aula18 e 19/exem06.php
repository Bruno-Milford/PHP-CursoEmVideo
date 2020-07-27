<?php
    // Matrizes (vetores dentro de vetores)

    $m = array(array(6,4), array(4,9), array(3,2));
    $m[0][1] = $m[2][0];
    // linha 0, posição 1 = linha 2, posição 0
    print_r($m);
?>