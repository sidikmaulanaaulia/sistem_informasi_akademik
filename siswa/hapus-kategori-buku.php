<?php 
include '../admin/koneksi.php';
session_start();
$id = $_GET['id'];
$hapus_kategori = mysqli_query($conn,"DELETE FROM kategori_buku WHERE id_kategori = '$id'");

$_SESSION['pesan_sukses'] = "Data Berhasil Di Hapus";
header("location:kategori-data-buku.php");  
 ?>