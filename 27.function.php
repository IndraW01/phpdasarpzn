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
}

function farenhit(int $celcius): int
{
  $rumus = ($celcius * 9 / 5) + 32;
  return $rumus;
}

$hasil = farenhit(30);
echo $hasil . PHP_EOL;

function ipk(...$nilai)
{
  $total = 0;
  foreach ($nilai as $ip) {
    $total += $ip;
  }
  return $total / 4;
}

$hasilnya = ipk(4.00, 3.78, 3.92, 3.90);
echo $hasilnya . PHP_EOL;
