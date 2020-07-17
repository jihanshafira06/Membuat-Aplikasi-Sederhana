<?php
require_once "../koneksi.php";
$id = $_GET['id'];

$sql = "DELETE FROM tb_users WHERE id_user='$id'";

if ($conn -> query($sql) === TRUE){
    echo "<script>alert('Data Berhasil Dihapus')</script> ";
    echo "<script>window.location.assign('index.php?p=formInputUser.php')</script> ";
}else{
    echo "<script>alert('Data Gagal Dihapus $conn->error')</script>";
    echo "<script>window.location.assign('index.php?p=formInputUser.php')</script> ";
}

?>