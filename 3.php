<?php

$order = [
    'products' => [
        'Bazén Bestway 57273 3,66m x 76cm',
        'Bazénová chemie Marimex AQuaMar Projasňovač 1l',
        'Malatec míčky do bazénu 100 ks',
        'Svítící fontánka - fialová hračka do vody'
    ],
    'productsPrice' => 9800.0,
    'delivery' => [
        'type' => 'DPD',
        'price' => 250.0,

    ],
    'vat' => 21
];

$totalPrice = $order['productsPrice'] + $order['delivery']['price'] * $order['vat'];

echo "Cena objednávky: $totalPrice";

/*
    A) Cena objednávky: 15050
    B) Cena objednávky: 15050.0
    C) Notice: Undefined index: price in /var/www/html/php-lekce-3/hra/3.php on line 19
*/
