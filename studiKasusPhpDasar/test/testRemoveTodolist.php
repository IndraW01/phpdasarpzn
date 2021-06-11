<?php

require_once "../model/Todolist.php";
require_once "../logic/showTodolist.php";
require_once "../logic/addTodolist.php";
require_once "../logic/removeTodolist.php";

addTodolist("Indra");
addTodolist("Alpit");
addTodolist("Fadli");

showTodolist();

removeTodolist(1);

showTodolist();

$succes = removeTodolist(3);
var_dump($succes);

showTodolist();
