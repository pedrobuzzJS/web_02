<?php
    
    require_once './lib/html.class.php';
    require_once './lib/head.class.php';

    $html = new html('en');
    $head = new head();

    $html->arrayElements($head);

    echo $html;