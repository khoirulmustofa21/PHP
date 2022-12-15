<?php 
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('mustofa', 'mustofa', 'mustofa@gmail.com');
SQL;

// excute sql
$connection->exec($sql);

// tutup koneksi
$connection = null;
?>