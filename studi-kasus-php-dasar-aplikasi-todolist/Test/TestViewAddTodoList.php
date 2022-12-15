<?php
require_once "../View/ViewAddTodoList.php";
require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList('Khoirul');
addTodoList('Mustofa');
addTodoList('Belajar');
addTodoList('Koding');

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();