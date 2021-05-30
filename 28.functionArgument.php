<?php

// default argumen
function sayHello($firstName, $lastName = "")
{
  echo "Selamat Datang $firstName $lastName" . PHP_EOL;
}

sayHello("Fadli Jaunum");
sayHello("Indra");

// tipe declaration
function sum(int $first, int $last)
{
  $total = $first + $last;
  echo "Pertambahan Dari $first + $last = $total" . PHP_EOL;
}
sum("10", "10");
sum(10, 10);
sum(true, false);

// variable length argument list
function sumAll(...$values)
{
  $total = 0;
  foreach ($values as $value) {
    $total += $value;
    // echo $total . PHP_EOL;
  }
  echo "Totalnya adalah " . implode("+", $values) . " = $total" . PHP_EOL;
}

$values = [1, 2, 3, 4, 5];
sumAll(1, 2, 3, 4, 5);
sumAll(...$values);

function students(...$names)
{
  foreach ($names as $name) {
    echo "Nama Mahasiswa $name" . PHP_EOL;
  }
}

students("Indra", "Alpit", "Fadli");
