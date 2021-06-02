<?php

function sayHello(string $nama, callable $filter)
{
  $fullName = call_user_func($filter, $nama);
  echo "Hello $fullName";
}

sayHello("Indra", function (string $nama): string {
  return "Nama saya $nama";
});
