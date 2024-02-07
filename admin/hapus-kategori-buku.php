<?php 
include 'koneksi.php';
session_start();
$id_kategori = base64_decode($_GET['id']);
$hapus_kategori = mysqli_query($conn,"DELETE FROM kategori_buku WHERE id_kategori = '$id_kategori'");

$_SESSION['pesan_sukses'] = "Data Berhasil Di Hapus";
header("location:kategori-data-buku.php");  
 ?>