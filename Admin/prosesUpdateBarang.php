<?php
require_once "../koneksi.php";
$id    = $_POST['idBarang'];
$nama  = $_POST['namaBarang'];
$satuan = $_POST['satuanBarang'];
$harga = $_POST['hargaBarang'];


$sql = "UPDATE tb_barang SET nama_barang='$nama', satuan_barang='$satuan', harga_barang='$harga' WHERE id_barang='$id'";

if ($conn->query($sql) === TRUE){
    echo "<script>alert('Data Berhasil Disimpan')</script> ";
    echo "<script>window.location.assign('index.php?p=formInputBarang.php')</script> ";
}else{
    echo "<script>alert('Data Gagal Disimpan $conn->error')</script>";
    echo "<script>window.location.assign('index.php?p=formInputBarang.php')</script> ";
}

?>