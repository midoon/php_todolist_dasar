<?php
require_once __DIR__."/model/TodoList.php";
require_once __DIR__."/bussinesLogic/AddTodoList.php";
require_once __DIR__."/bussinesLogic/RemoveTodoList.php";
require_once __DIR__."/bussinesLogic/ShowTodoList.php";
require_once __DIR__."/view/ViewAddTodoList.php";
require_once __DIR__."/view/ViewRemoveTodoList.php";
require_once __DIR__."/view/ViewTodoList.php";

echo "Aplikasi T0 Do List" . PHP_EOL;
viewTodoList();
