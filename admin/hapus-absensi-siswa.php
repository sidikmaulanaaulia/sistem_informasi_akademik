<?php 
session_start();
  $id = base64_decode($_GET['id']);
  $hapus_absensi_guru = mysqli_query($conn,"DELETE FROM tabel_absensi_siswa WHERE id_absensi='$id'");
  $_SESSION['pesan_sukses'] = "Berhasil Menghapus Data";
  header('location:data-absensi.php');

 ?>