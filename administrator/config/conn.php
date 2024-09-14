<?php
//conn.php
$dsn = 'mysql:dbname=ciptakarya_lampung;host=localhost';
$user = 'root'; //user mysql kamu
$password = ''; //isi dengan password mysql kamu
 
try {
    $connect = new PDO($dsn, $user, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Koneksi Bermasalah!: ' . $e->getMessage();
}
 
?>