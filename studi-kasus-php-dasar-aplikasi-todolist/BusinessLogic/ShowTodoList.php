<?php
/*
 * Menampilkan todo di list
 * */
function showTodoList()
{
    /* Mengambil variable todoList dari global scope yang ada pada file "Model/TodoList.php"*/
    global $todoList;

    echo "TODOLIST" . PHP_EOL;

    foreach ($todoList as $number => $value){
        echo "$number . $value" . PHP_EOL;
    }

}