<?php
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Khoirul");
addTodoList("Mustofa");
addTodoList("Belajar");

global $todoList;

var_dump($todoList);