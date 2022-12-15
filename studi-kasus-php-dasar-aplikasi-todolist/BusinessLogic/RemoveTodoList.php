<?php
/*
 * Menghapus todo di list
 * */
function removeTodoList(int $number):bool
{
    global $todoList;

    if ($number > count($todoList)){
        return false;
    }
    for ($i = $number, $maxTodoList = count($todoList); $i < $maxTodoList; $i++){
        $todoList[$i] = $todoList[$i + 1];
    }

    // Hapus Record terakhir
    unset($todoList[count($todoList)]);
    return true;
}