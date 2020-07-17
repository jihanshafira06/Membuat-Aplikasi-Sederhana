<?php
require_once "../koneksi.php";
$id    = $_POST['idUser'];
$nama  = $_POST['namaUser'];
$email = $_POST['emailUser'];


$sql = "UPDATE tb_users SET nama_User='$nama', email_User='$email' WHERE id_User='$id'";

if ($conn -> query($sql) === TRUE){
    echo "<script>alert('Data Berhasil Disimpan')</script> ";
    echo "<script>window.location.assign('index.php?p=formInputUser.php')</script> ";
}else{
    echo "<script>alert('Data Gagal Disimpan $conn->error')</script>";
    echo "<script>window.location.assign('index.php?p=formInputUser.php')</script> ";
}

?>