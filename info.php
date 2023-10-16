<?php
include 'admin/koneksi.php';
$kode_sekolah = '234234';
$set = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM table_sekolah WHERE kode='$kode_sekolah'"));
$nama_sekolah	= $set['nama_sekolah'];
$alamat	= $set['alamat'];
$nama_kepsek	= $set['nama_kepsek'];
$nama_direktur	= $set['nama_direktur'];
$email	= $set['email'];
$no_hp	= $set['no_hp'];
$provinsi	= $set['provinsi'];
$kabupaten	= $set['kabupaten'];
$kecamatan	= $set['kecamatan'];
$desa	= $set['desa'];

?>