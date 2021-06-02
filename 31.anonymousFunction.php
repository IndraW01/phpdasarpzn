<?php

$sayHello = function (string $nama) {
  echo "Hello $nama" . PHP_EOL;
};

$sayHello("Indra");

// Anonymous Function
function sayGoodBye(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Indra", function (string $name): string {
  $upper = strtoupper($name);
  return $upper;
});

$dadah = function (string $name): string {
  return strtolower($name);
};

sayGoodBye("Indra", $dadah);

// mengakses variabel luar
$firstName = "Indra";
$lastName = "Wijaya";

$panggil = function () use ($firstName, $lastName) {
  echo "Hello $firstName $lastName" . PHP_EOL;
};

$panggil();
