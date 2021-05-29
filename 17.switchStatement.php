<?php

$nilai = "B";

switch ($nilai) {
  case "A":
    echo "Anda Lulus yang terbaik" . PHP_EOL;
    break;
  case "B":
  case "C":
    echo "Anda Lulus" . PHP_EOL;
    break;
  case "D":
    echo "Anda Tidak Lulus" . PHP_EOL;
    break;
  default:
    echo "Mungkin anda salah jurusan" . PHP_EOL;
}

switch ($nilai):
  case "A":
    echo "Anda Lulus yang terbaik" . PHP_EOL;
    break;
  case "B":
  case "C":
    echo "Anda Lulus" . PHP_EOL;
    break;
  case "D":
    echo "Anda Tidak Lulus" . PHP_EOL;
    break;
  default:
    echo "Mungkin anda salah jurusan" . PHP_EOL;
endswitch;
