<?php

require_once "../view/viewShowTodolist.php";
require_once "../view/viewAddTodolist.php";
require_once "../logic/addTodolist.php";

addTodolist("Indra");
addTodolist("Alpit");

viewAddTodolist();

viewShowTodolist();

viewAddTodolist();

viewShowTodolist();
