<?php
require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Khoirul");
addTodoList("Mustofa");
addTodoList("Belajar");
addTodoList("PHP");
addTodoList("Sampai Expert");

viewShowTodoList();