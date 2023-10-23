<?php
session_start(); 
include '../admin/koneksi.php';

$id = $_GET['id'];
$delete_data = mysqli_query($conn,"DELETE FROM buku WHERE book_id='$id'");
$_SESSION['pesan_sukses'] = "Data Berhasil Di Hapus";
header("location:data-buku-perpus.php");

 ?>