<?php
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Belajar");
addTodoList("Tutorial");
addTodoList("Bacca Buku");
addTodoList("Main Game");

showTodoList();

removeTodoList(3);
showTodoList();

removeTodoList(3);
showTodoList();

// remove todoList data key notfound
removeTodoList(5);
showTodoList();

// remove todoList data key notfound
$success = removeTodoList(5);
var_dump($success);

showTodoList();
