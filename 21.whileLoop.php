<?php

$counter = 1;

while ($counter <= 10) {
  echo "Ini perulangan While Loop ke- $counter" . PHP_EOL;
  $counter++;
}

$counter = 10;
while ($counter >= 1) :
  echo "Ini perulangan While Loop ke- $counter" . PHP_EOL;
  $counter--;
endwhile;
