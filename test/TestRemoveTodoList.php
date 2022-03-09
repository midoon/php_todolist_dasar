<?php

require_once __DIR__."/../model/TodoList.php";
require_once __DIR__."/../bussinesLogic/RemoveTodoList.php";
require_once __DIR__."/../bussinesLogic/ShowTodoList.php";
require_once __DIR__."/../bussinesLogic/AddTodoList.php";

addTodoList("satu");
addTodoList("dua");
addTodoList("tiga");
addTodoList("empat");

showTodoLlist();

removeTodoList(3);

showTodoLlist();

removeTodoList(2);

showTodoLlist();

$succes = removeTodoList(4);
var_dump($succes);

showTodoLlist();