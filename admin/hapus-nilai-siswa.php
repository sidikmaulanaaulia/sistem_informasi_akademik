<?php 
session_start();
include 'koneksi.php';

$id = base64_decode($_GET['id']);
$data_nilai = mysqli_query($conn,"DELETE FROM tb_nilai WHERE id_nilai='$id'");
$_SESSION['pesan_sukses'] = "Data Berhasil Di Hapus";
header("location:data-nilai-siswa.php");

 ?>