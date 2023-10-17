<?php

$products = [
    [
        'id' => 1,
        'name' => 'Ordinateur',
        'price' => 100,
        'image' => '../../images/asus_1.jpg',
        'category' => 'technologies',
        'origin' => 'Paris',
        'quantity' => 13,
        'min_threshold' => 50,
        'ordered' => 2,
    ],
    [
        'id' => 2,
        'name' => 'Coca-cola',
        'price' => 20,
        'image' => '../../images/body.png',
        'category' => 'boissons',
        'origin' => 'Paris',
        'quantity' => 13,
        'min_threshold' => 50,
        'ordered' => 2,
    ],
    [
        'id' => 3,
        'name' => 'Pizza',
        'price' => 20,
        'image' => '../../images/bulb.png',
        'category' => 'nourritures',
        'origin' => 'Paris',
        'quantity' => 13,
        'min_threshold' => 50,
        'ordered' => 2,
    ],
];

$resultat = array_search([
    'id' => 3,
    'name' => 'Pizza',
    'price' => 20,
    'image' => '../../images/bulb.png',
    'category' => 'nourritures',
    'origin' => 'Paris',
    'quantity' => 13,
    'min_threshold' => 50,
    'ordered' => 2,
], $products);
echo "trouvé:" . $resultat;