<?php
session_start(); 
include 'koneksi.php';

$id_book = base64_decode($_GET['id']);
$delete_data = mysqli_query($conn,"DELETE FROM buku WHERE book_id='$id_book'");
$_SESSION['pesan_sukses'] = "Data Berhasil Di Hapus";
header("location:data-buku-perpus.php");

 ?>