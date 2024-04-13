<?php 
    require_once 'Pen.php';

    $pen = new Pen();
    $pen->color = 'blue';
    $pen->type = 'bic';
    $pen->capIsOpen = false;

    var_dump($pen);
?>