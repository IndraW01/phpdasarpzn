<?php

require_once "../view/viewShowTodolist.php";
require_once "../logic/addTodolist.php";

addTodolist("Indra");
addTodolist("Alpit");
addTodolist("Fadli");
addTodolist("Jero");
viewShowTodolist();
