<?php

// menampilkan todo di list
function showTodoLlist()
{
    global $todolist;
    echo "=================================" . PHP_EOL;
    echo "TODO LIST" . PHP_EOL;

    foreach($todolist as $number => $value)
    {
        echo "$number . $value" . PHP_EOL; 
    }
    
}

