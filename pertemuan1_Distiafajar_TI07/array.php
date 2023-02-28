<?php

// array index
$animals = ['macan', 'kucing', 'beruang', 'ayam'];

// menambahkan data ke array
array_push($animals, "kambing");

// mengakses array index
var_dump($animals);

//array assosiatif
$animals = [
    'nama' => $animals[1],
    'janis' => 'karnivora',
    'usia' => '4 bulan'
];

// mengakses array assosiatif
echo $animals ['jenis'];