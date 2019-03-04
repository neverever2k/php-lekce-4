<?php

$product = [
    'title' => 'Chladnička komb. Bosch KIV34X20, vestavná',
    'description' => 'Lednice v energetické třídě A+ s objemem 203/71l',
    'color' => 'white',
    'dimensions' => [
        61.5,
        55,
        177
    ],
    'weight' => 62.6,
    'price' => 11930,
    'discount' => 30.6,
    'vat' => 21,
    'available' => true
];

var_dump($product['price']);;

/*
    A) float(11930)
    B) int(11930)
    C) NULL
*/
