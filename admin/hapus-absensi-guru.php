<?php 
session_start();
  $id = base64_decode($_GET['id']);
  $hapus_absensi_guru = mysqli_query($conn,"DELETE FROM tabel_absensi_guru WHERE id='$id'");
  $_SESSION['pesan_sukses'] = "Berhasil Menghapus Data";
  header('location:data-absensi-guru.php');

 ?>