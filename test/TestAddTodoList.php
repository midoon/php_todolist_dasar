<?php

require_once __DIR__.'/../model/TodoList.php';
require_once __DIR__."/../bussinesLogic/AddTodoList.php";

addTodoList("hidup");
addTodoList("tidur");

var_dump($todolist);