<?php
require_once "../Helper/Input.php";

$name = input('Name');
echo "Hello $name";

$jurusan = input('Jurusan');
echo "Jurusan Anda adalah $jurusan";