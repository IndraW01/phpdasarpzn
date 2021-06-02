<?php

function sum(int $first, int $last): int
{
  return $first + $last;
}

$total = sum(10, 10);
echo $total . PHP_EOL;

function nilai(int $value): string
{
  if ($value >= 80) {
    return "A";
  } elseif ($value >= 70) {
    return "B";
  } elseif ($value >= 60) {
    return "C";
  } else {
    return "D";
  }
}

$total = nilai(90);
echo $total . PHP_EOL;

$total = nilai(75);
echo $total . PHP_EOL;
