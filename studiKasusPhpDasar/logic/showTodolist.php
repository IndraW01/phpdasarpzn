<?php

/*
  Menamilkan Todo di list
*/

function showTodolist()
{
  global $todoList;

  echo "TODOLIST" . PHP_EOL;
  // var_dump($todoList);
  foreach ($todoList as $number => $value) {
    echo "$number. $value" . PHP_EOL;
  }
}
