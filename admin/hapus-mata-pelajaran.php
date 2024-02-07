<?php 
session_start();
include 'koneksi.php';

$id = base64_decode($_GET['id']);
$data_pelanggaran = mysqli_query($conn,"DELETE FROM tb_mapel WHERE id_mapel='$id'");
$_SESSION['pesan_sukses'] = "Data Berhasil Di Hapus";
header("location:data-mata-pelajaran.php");

 ?>