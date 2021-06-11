<?php

require_once __DIR__ . "/model/Todolist.php";
require_once __DIR__ . "/logic/showTodolist.php";
require_once __DIR__ . "/logic/addTodolist.php";
require_once __DIR__ . "/logic/removeTodolist.php";
require_once __DIR__ . "/view/viewShowTodolist.php";
require_once __DIR__ . "/view/viewAddTodolist.php";
require_once __DIR__ . "/view/viewRemoveTodolist.php";
require_once __DIR__ . "/helper/input.php";

echo "Aplikasi Todolist" . PHP_EOL;

viewShowTodolist();
