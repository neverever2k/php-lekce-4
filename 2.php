<?php

$eshop = 'vseprozahradu.cz';
$product = [
    'title' => 'Sekačka benzínová Gardenius GB1R94-41',
    'description' => 'Benzínová sekačka s výkonem motoru 1600 W',
    'url' => 'sekacka-benzinova-gardenius-gb1r94-41',
    'manufacturer' => 'Gardenius',
    'color' => 'red',
    'dimensions' => [
        57,
        38,
        68
    ],
    'weight' => 19.0,
    'discount' => 49.0,
    'price' => 3799,
    'available' => true,
];

echo 'Sekačku ' . $product['manufacturer'] . ' se slevou ' . $product['discount'] . '%';
echo "vám dodá e-shop $eshop";

/*
    A) Sekačku se slevou 49.0% vám dodá e-shop vseprozahradu.cz
    B) Sekačku Gardenius se slevou 49%vám dodá e-shop vseprozahradu.cz
    C) Sekačku Gardenius se slevou 49.0% vám dodá e-shop vseprozahradu.cz
*/
