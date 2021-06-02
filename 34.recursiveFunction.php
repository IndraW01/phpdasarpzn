<?php

function faktorialLoop(int $value): int
{
  $total = 1;
  for ($i = 1; $i <= $value; $i++) {
    $total *= $i;
  }
  return $total;
}
echo faktorialLoop(5) . PHP_EOL;

function faktorialRecursive(int $nilai): int
{
  if ($nilai == 1) {
    return 1;
  } else {
    return $nilai * faktorialRecursive($nilai - 1);
  }
}
echo faktorialRecursive(5) . PHP_EOL;

function loop(int $value)
{
  if ($value == 0) {
    echo "Selesai";
  } else {
    echo "Nilai ke- $value" . PHP_EOL;
    return loop($value - 1);
  }
}

loop(3000000);
