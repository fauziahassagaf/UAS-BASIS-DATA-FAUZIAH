<?php 
// koneksi database
include 'koneksi.php';
 

$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$alamat = $_POST['alamat'];
 if (!empty($nama_barang) || !empty($harga) || !empty($alamat)) {
// menginput data ke database
mysqli_query($koneksi,"insert into barang values('','$nama_barang','$harga','$alamat')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>