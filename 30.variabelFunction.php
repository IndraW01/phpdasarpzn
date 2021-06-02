<?php

function foo()
{
  echo "Foo" . PHP_EOL;
}

function bar()
{
  echo "Bar" . PHP_EOL;
}

$variabelFoo = "foo";
$variabelFoo();

$variabelBar = "bar";
$variabelBar();

// function Callback
function sayHello(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string
{
  return "Sample $name";
}

sayHello("Indra", "sampleFunction");
sayHello("Indra", "strtoupper");
sayHello("Indra", "strtolower");

function pacar(string $nama, $siapa)
{
  $pacarku = $siapa($nama);
  echo "Hello $pacarku" . PHP_EOL;
}

function tespacar(string $nama): string
{
  return "Pacarku $nama" . PHP_EOL;
}

pacar("Azza", "tespacar");
