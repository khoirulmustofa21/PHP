<?php
$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "root";

try {

    $connection = new PDO("mysql:host=$host:$port; dbname=$database", $username, $password);
    echo "Berhasil terkoneksi pada MySQL" . PHP_EOL;
    // Menutup koneksi
    $connection = null;

    // function excute(sql) bisa digunakan untuk semua jenis SQL yang tidak membutuhkan result data,
    // CREATE TABLE, INSERT, UPDATE, DELETE, ALTER TABLE, dan lain-lain.

} catch (PDOException $exception) {
    echo "Gagal terkoneksi ke database MySQL : " . $exception->getMessage() . PHP_EOL;
}
