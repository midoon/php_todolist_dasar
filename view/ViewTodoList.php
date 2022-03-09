<?php

require_once __DIR__."/../model/TodoList.php";
require_once __DIR__."/../bussinesLogic/ShowTodoList.php";
require_once __DIR__."/../view/ViewAddTodoList.php";
require_once __DIR__."/../view/ViewRemoveTodoList.php";
require_once __DIR__."/../helper/Input.php";

function viewTodoList(){
    while(true){
        showTodoLlist();

        echo "======================================".PHP_EOL;
        echo "MENU" .PHP_EOL;
        echo "**********************". PHP_EOL;
        echo "1. Tambah Todo" .PHP_EOL;
        echo "2. Hapus Todo" .PHP_EOL;
        echo "3. Keluar" .PHP_EOL;
        echo "======================================".PHP_EOL.PHP_EOL;

        $pilihan = input("pilihan");
        if($pilihan == "1"){
            viewAddTodoList();
        } else if($pilihan == "2"){
            viewRemoveTodoList();
        } else if($pilihan == "3"){
            echo "pilihan 3".PHP_EOL;
            break;
        } else {
            echo "Pilihan tidak ditemukan" .PHP_EOL;
            viewTodoList();
        }
    }
    echo "Terima Kasih" .PHP_EOL;
}