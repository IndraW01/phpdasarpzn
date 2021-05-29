<?php

// Dot Operator
$nama = "Indra Wijaya";

echo "Nama : " . $nama . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

// Konveri string ke number atau sebaliknya
$valueString = (string) 100;
var_dump($valueString);

$valueInt = (int) "100"; //jika yang diinputkan lain angka maka valuenya 0
var_dump($valueInt);

$valueFloat = (float) "1.01";
var_dump($valueFloat);

// Mengakses Karakter
$name = "Eko";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
// echo $name[3] . PHP_EOL;

// Variable Parsing
echo "Hello $name Selmat Belajar PHP" . PHP_EOL;

// Curly Brace
$var = "var";
echo "This is {$var}s" . PHP_EOL;
