<?php
session_start(); 
include 'koneksi.php';

$id_kelas = $_GET['id'];
$hapus_data_kelas = mysqli_query($conn,"DELETE FROM tabel_kelas WHERE id_kelas='$id_kelas'");

header("location:table-kelas.php");
$_SESSION['pesan_sukses'] = "Berhasil Menghapus Data";
exit();

 ?>