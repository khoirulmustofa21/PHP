<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

//sql injection
//helper quote digunakan untuk check karackter pada string yang dimasukan.
$username = $connection->quote("admin'; #");
$password =  $connection->quote("salah");

//$username = "admin";
//$password = "admin";


$sql = "SELECT * FROM admin WHERE username = $username AND password= $password;";

$statement = $connection->query($sql);

$success = false;
$find_user = null;

foreach ($statement as $row){
//    success
    $success = true;
    $find_user= $row["username"];
}

if ($success){
    echo "Success login : " . $find_user . PHP_EOL;
}else{
    echo "Gagal Login" . PHP_EOL;
}

$connection = null;