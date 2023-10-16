<?php 
session_start();
include 'koneksi.php';
$id = $_GET['id'];
$data_siswa = mysqli_query($conn,"DELETE FROM tabel_siswa WHERE id='$id'");
header("location:table-siswa.php");
$_SESSION['pesan_sukses'] = "Berhasil Menghapus Data";
exit();	

 ?>