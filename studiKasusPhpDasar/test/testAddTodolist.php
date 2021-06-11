<?php

require_once "../model/Todolist.php";
require_once "../logic/addTodolist.php";

$todoList[1] = "PHP OOP";
addTodolist("PHP COMPOSER");
addTodolist("PHP COMPOSER EXPERT");

var_dump($todoList);
