<?php
    
    require_once './lib/html.class.php';
    require_once './lib/head.class.php';
    require_once './lib/body.class.php';

    $html = new html('en');
    $head = new head();
    $body = new body();

    $html->arrayElements($head);
    $html->arrayElements($body);

    echo $html;