<?php

require_once __DIR__.'/../model/TodoList.php';
require_once __DIR__ ."/../bussinesLogic/RemoveTodoList.php";
require_once __DIR__."/../bussinesLogic/ShowTodoList.php";
require_once __DIR__. "/../helper/Input.php";

function viewRemoveTodoList(){
    echo "REMOVE TODO " . PHP_EOL;
    
    $pilihan = input("Masukan NO todo (0 untuk membatalkan)");

    if($pilihan == "0") {
        echo "Batal menghapus data". PHP_EOL;
    } else{
        removeTodoList($pilihan);
    }
    
    
}