<?php

$buat = true;

if ($buat) {
  function sayHello()
  {
    echo "Hy Wordl" . PHP_EOL;
  }
}

if (!$buat) {
  echo "Function Belum dibuat";
} else {
  sayHello();
  sayHello();
}
