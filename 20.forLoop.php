<?php

for ($counter = 1; $counter <= 10; $counter++) {
  echo "Ini adalah Foor Loop ke- $counter" . PHP_EOL;
}

for ($counter = 10; $counter >= 1; $counter--) {
  echo "Ini adalah Foor Loop ke- $counter" . PHP_EOL;
}

for ($counter = 1; $counter <= 10; $counter++) :
  echo "Ini adalah Foor Loop ke- $counter" . PHP_EOL;
endfor;

for ($counter = 10; $counter >= 1; $counter--) :
  echo "Ini adalah Foor Loop ke- $counter" . PHP_EOL;
endfor;


// for ($i = 1; $i <= 10; $i++) {
//   for ($j = 10; $j >= $i; $j--) {
//     echo "*";
//   }
//   echo PHP_EOL;
// }
