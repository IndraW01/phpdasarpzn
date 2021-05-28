<?php

$name = "Indra Wijaya";
$name = null;

$age = null;

echo "Nama : ";
echo $name;
echo "\n";

echo "Umur : ";
echo $age;
echo "\n";

echo "Is Name Null : ";
var_dump(is_null($name));
echo "\n";

// menghapus variabel
$contoh = null;
// unset($contoh);

var_dump(isset($contoh));
