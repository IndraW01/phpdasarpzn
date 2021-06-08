<?php

require_once "../model/Todolist.php";
require_once "../logic/addTodolist.php";

$todoList[1] = "PHP OOP";
addTodolist("PHP COMPOSER");
var_dump(addTodolist("PHP COMPOSER ADVNACE"));
