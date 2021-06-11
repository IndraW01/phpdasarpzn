<?php

/**
 * Menambah Todo ke list
 */
function addTodolist(string $todo)
{
  global $todoList;
  $number = count($todoList) + 1;

  $todoList[$number] = $todo;
}
