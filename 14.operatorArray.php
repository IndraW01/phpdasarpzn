<?php

// menggabungkan dua buah array
$first = [
  "first_name" => "Indra"
];

$last = [
  "first_name" => "Alpit",
  "last_name" => "Wijaya"
];

$full = $last + $first;
var_dump($full);

// membandingkan array
$a = [
  "last_name" => "Wijaya",
  "first_name" => "Indra"
];

$b = [
  "first_name" => "Indra",
  "last_name" => "Wijaya"
];

$full = $a == $b;
var_dump($full);
$full = $a === $b;
var_dump($full);
