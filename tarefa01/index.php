<?php
    
    require_once './lib/html.class.php';
    require_once './lib/head.class.php';
    require_once './lib/body.class.php';
    require_once './lib/h1.class.php';

    $html = new html('en');
    $head = new head();
    $body = new body();
    $h1 = new h1('Hello, world!', '');
    $body->arrayElements($h1);

    $html->arrayElements($head);
    $html->arrayElements($body);

    echo $html;