<?php

$valus = [1, 6, 8, 3, 7.6];
var_dump($valus[1]);

$name = ["Indra", "Wijaya", "Alpit"];
var_dump($name);

// menampilkan data berdasarkan index
var_dump($name[0]);
// mengubah data dari index yang dipilih
$name[0] = "Fadli";
var_dump($name);
// menghapus data dari index yang dipilih
unset($name[1]);
var_dump($name);
// menambahkan data array
$name[] = "Asrofi";
var_dump($name);
// meghitung jumlah data di array
var_dump(count($name));

$indra = [
  [
    "id" => 'Indra',
    "Name" => "Indra Wijaya",
    "Age" => 19,
    "addres" => [
      "city" => "Kaltim",
      "country" => "Indonesia"
    ]
  ]
];

var_dump($indra[0]["addres"]['country']);
