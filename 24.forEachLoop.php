<?php

$names = ["Indra", "Alpit", "Fadli"];

foreach ($names as $name) {
  echo "Data $name" . PHP_EOL;
}

foreach ($names as $index => $value) {
  echo "Data ke- $index : $value" . PHP_EOL;
}

$persons = [
  [
    "name" => "Indra",
    "umur" => 19,
    "Alamat" => "Samboja"
  ]
];

// var_dump($persons);
echo $persons[0]["name"] . PHP_EOL;
// echo $persons["umur"] . PHP_EOL;

foreach ($persons as $key => $value) {
  var_dump($value);
  foreach ($value as $i => $j) {
    echo $i . " : " . $j . PHP_EOL;
  }
}

foreach ($persons as $key) {
  var_dump($key);
  foreach ($key as $x) {
    echo $x . PHP_EOL;
  }
}
