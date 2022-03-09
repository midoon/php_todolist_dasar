<?php

require_once __DIR__.'/../model/TodoList.php';
require_once __DIR__ ."/../bussinesLogic/AddTodoList.php";
require_once __DIR__."/../bussinesLogic/ShowTodoList.php";
require_once __DIR__. "/../helper/Input.php";

function viewAddTodoList(){
    echo "MENAMBAHKAN TODO LIST" . PHP_EOL;
    
    $pilihan = input("Masukan todo (0 untuk membatalkan)");
    
    if($pilihan == "0") {
        echo "Batal menambahkan data". PHP_EOL;
    } else{
        addTodoList($pilihan);
    }
}