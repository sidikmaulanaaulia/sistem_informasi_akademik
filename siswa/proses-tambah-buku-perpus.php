<?php 
include '../admin/koneksi.php';
session_start();
if (isset($_POST['simpan'])) {
	$isbn = $_POST['isbn'];
	$judul_buku = $_POST['judul_buku'];
	$penerbit = $_POST['penerbit'];
	$tahun_terbit = $_POST['tahun_terbit'];
	$kode_rak = $_POST['kode_rak'];
	$kategori = $_POST['kategori'];

	$data_buku = mysqli_query($conn,"INSERT INTO buku (isbn,judul_buku,penerbit,tahun_terbit,kode_rak,id_kategori) VALUES ('$isbn','$judul_buku','$penerbit','$tahun_terbit','$kode_rak','$kategori')");

	$_SESSION['pesan_sukses'] = "Berhasil Menambahkan Data";
	header("location:data-buku-perpus.php");
	exit();
}


 ?>