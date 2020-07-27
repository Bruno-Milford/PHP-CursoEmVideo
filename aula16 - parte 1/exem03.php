<?php
    $txt = "<p>Aqui temos um texto gigante que foi criado pelo PHP para mostrar a função wordwrap</p>";
    $res = wordwrap($txt, 5, "<br>\n", false);
    echo $res;
?>