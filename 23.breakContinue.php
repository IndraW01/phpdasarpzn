<?php

// Break
$angka = 1;
while (true) {
  echo "Perulangan Ke- $angka" . PHP_EOL;

  $angka++;
  if ($angka > 10) {
    break;
  }
}

// Continue
for ($angka2 = 1; $angka2 <= 20; $angka2++) {
  if ($angka2 % 2 == 0) {
    continue;
  }
  echo "Hello Continue : $angka2" . PHP_EOL;
}
