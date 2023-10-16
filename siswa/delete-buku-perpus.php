<?php 
include '../admin/koneksi.php';

$id = $_GET['id'];
$delete_data = mysqli_query($conn,"DELETE FROM buku WHERE book_id='$id'");
header("location:data-buku-perpus.php");

 ?>