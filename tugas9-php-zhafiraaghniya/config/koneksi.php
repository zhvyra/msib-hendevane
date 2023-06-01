<?php
$dbname = "dbtoko1";
$dsn = "mysql:host=localhost;dbname=$dbname";
$user = "root";
$pass = "";

try {
    $dbh = new PDO($dsn, $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Koneksi Berhasil";
} catch (PDOException $e) {
    echo "Error : " . $e->getMessage();
}
