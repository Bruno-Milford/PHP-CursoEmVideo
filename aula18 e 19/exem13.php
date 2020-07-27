<?php
    $v = array(2 => "A", 5 => "J", 0 => "M", 3 => "X", 4 => "K");
    print_r($v);
    ksort($v);
    print_r($v);
    krsort($v);
    print_r($v);
?>