<?php

function jumlah()
{
  static $total = 1; //Static Scope

  echo "Perulangan ke- $total" . PHP_EOL;
  $total++;
}

jumlah();
jumlah();
jumlah();
