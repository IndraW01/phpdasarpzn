<?php

$name = " Indra"; //Global Scope

function sayHello()
{
  global $name; //Global Keyword
  echo "Hello $name" . PHP_EOL;
}

sayHello();
