<?php

// Array

    // Indexed Array
    $a = ['BMW', 'Toyota', 'lexus'];

    // Accociative Array
    $b = [
        'Indonesia' => 'Menang',
        'Singapura' => 'Kalah',
        'Thailand ' => 'Seri',
    ];

    // Multidimensional Array
    $c = [
        'a' => $a,
        'b' => $b,
    ];

    $d = [
        'c' => $c,
        'lainnya' => [1,2,3,4,5,6,7,8,100]
    ];

    echo $d['c']['a']['1'];
