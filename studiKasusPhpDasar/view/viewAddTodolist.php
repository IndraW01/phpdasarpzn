<?php

require_once __DIR__ . "/../model/Todolist.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../logic/addTodolist.php";

function viewAddTodolist()
{
  echo "MENAMBAH TODO" . PHP_EOL;

  $todo = input("Todo (X untuk batal)");

  if ($todo == "X") {
    // batal
    echo "Batal menambah Todo" . PHP_EOL;
  } else {
    addTodolist($todo);
  }
}
