<?php

function input(string $info): string
{
  echo "$info :";
  $result = fgets(STDIN);
  return trim($result);
}

// $name = input("Masukkan Nama Anda");
// echo "Hello $name" . PHP_EOL;
