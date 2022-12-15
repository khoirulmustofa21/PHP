<?php
require_once __DIR__ . "/vendor/autoload.php";

use KhoirulMustofa\Data\People;

$people = new People("Khoirul");

echo $people->sayHello("Mahmud");