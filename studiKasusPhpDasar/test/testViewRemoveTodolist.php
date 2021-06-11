<?php

require_once "../model/Todolist.php";
require_once "../logic/addTodolist.php";
require_once "../view/viewRemoveTodolist.php";
require_once "../logic/showTodolist.php";

addTodolist("jamal");
addTodolist("Indra");
addTodolist("Fadli");
addTodolist("Alpit");

showTodolist();
viewRemoveTodolist();
showTodolist();
