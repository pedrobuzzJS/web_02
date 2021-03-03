<?php
    
    require('autoload.php');

    $html = new html('en');

    $head = new head('Hello, world!');

    $body = new body();


    $cript = new script('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', [
        'integrity'   => 'sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0',
        'crossorigin' => 'anonymous',
    ]);

    $select = new select('cars','cars','cars', ['volvo','saab','mercedes','audi','bmw'],'form-select');

    $body->arrayElements($cript);
    $body->arrayElements($select);
    $html->arrayElements($head);
    $html->arrayElements($body);
    echo $html;