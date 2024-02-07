<?php 
include 'koneksi.php';
session_start();
  $id = base64_decode($_GET['id']);
  $hapus_peminjaman_perpus = mysqli_query($conn,"DELETE FROM peminjaman WHERE load_id='$id'");
  $_SESSION['pesan_sukses'] = "Berhasil Menghapus Data";
  header('location:data-peminjaman-perpus.php');

 ?>