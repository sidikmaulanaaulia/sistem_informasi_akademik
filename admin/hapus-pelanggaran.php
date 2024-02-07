<?php 
session_start();
include 'koneksi.php';

$id = base64_decode($_GET['id']);
$data_pelanggaran = mysqli_query($conn,"DELETE FROM tabel_pelanggaran WHERE id='$id'");
$_SESSION['pesan_sukses'] = "Data Berhasil Di Hapus";
header("location:data-pelanggaran.php");

 ?>