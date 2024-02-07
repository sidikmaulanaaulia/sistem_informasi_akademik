<?php 
session_start();
include 'koneksi.php';

$id = base64_decode($_GET['id']);
$hapus_pembayaran = mysqli_query($conn,"DELETE FROM pembayaran WHERE id='$id'");
$_SESSION['pesan_sukses'] = "Berhasil Menghapus Data";
header("location:data-pembayaran.php");

 ?>