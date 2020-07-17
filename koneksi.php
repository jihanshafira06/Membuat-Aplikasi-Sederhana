<?php

$serverName = "localhost";
$userName   = "root";
$password   =  "JihanShafira";
$dbName     =  "db_toko_jihan";

$conn = new mysqli($serverName, $userName, $password, $dbName);

if($conn->connect_error){
    die ("Koneksi Gagal");
}



?>
