<?php

function FizzBuzz($value)
{
  for ($i = 1; $i <= $value; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
      echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
      echo "Fizz ";
    } elseif ($i % 5 == 0) {
      echo "Buzz ";
    } else {
      echo "$i ";
    }
  }
  echo PHP_EOL;
}

FizzBuzz(30);


function repeatStr($n, $str)
{
  $simpan = [];
  for ($i = 1; $i <= $n; $i++) {
    $simpan[] = $str;
  }
  $jadi = join("", $simpan);
  echo '"' . $jadi . '"';
  echo PHP_EOL;
}

repeatStr(6, "I");
repeatStr(5, "Hello");

function greet($name)
{
  echo "\"Hello, $name how are you doing today?\".";
}

greet("Indra");
