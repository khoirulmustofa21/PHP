<?php
require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";


addTodoList('Khoirul');
addTodoList('Mustofa');
addTodoList('Belajar');
addTodoList('Koding');
addTodoList('Sampai Master');

showTodoList();

viewRemoveTodoList();

showTodoList();