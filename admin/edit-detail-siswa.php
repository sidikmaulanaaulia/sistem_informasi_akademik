<?php 
include 'header.php'; 

if (isset($_POST['simpan'])) {
	$nis_siswa = mysqli_real_escape_string($conn,$_POST['nis_siswa']); 
	$nisn = mysqli_real_escape_string($conn,$_POST['nisn']); 
	$nama_siswa = mysqli_real_escape_string($conn,$_POST['nama_siswa']); 
	$kelas = mysqli_real_escape_string($conn,$_POST['kelas']); 
	$alamat =mysqli_real_escape_string($conn,$_POST['alamat']); 
	$tanggal_lahir = mysqli_real_escape_string($conn,$_POST['tanggal_lahir']); 
	$tempat_lahir = mysqli_real_escape_string($conn,$_POST['tempat_lahir']); 
	$agama = mysqli_real_escape_string($conn,$_POST['agama']); 
	$jarak_tempuh = mysqli_real_escape_string($conn,$_POST['jarak_tempuh']); 
	$nama_orang_tua = mysqli_real_escape_string($conn,$_POST['nama_orang_tua']); 
	$tahun_masuk = mysqli_real_escape_string($conn,$_POST['tahun_masuk']); 

	$data_siswa = mysqli_query($conn,"INSERT INTO tabel_siswa
		(nis_siswa,nisn,nama_siswa,kelas,alamat,tgl_lahir,tempat_lahir,agama,jarak_tempuh,nama_ortu,tahun_masuk) VALUES ('$nis_siswa','$nisn','$nama_siswa','$kelas','$alamat','$tanggal_lahir','$tempat_lahir','$agama','$jarak_tempuh','$nama_orang_tua','$tahun_masuk')
		");

	$pesan_sukses= "Tambah Data Berhasil";
}

$id = $_GET['id'];
$data_pembayaran = mysqli_query($conn,"SELECT * FROM pembayaran WHERE id='$id'");

while($row = mysqli_fetch_assoc($data_pembayaran)){
	$jumlah = $row['jumlah_pembayaran'];
	$kasir = $row['nama_kasir'];
	$tanggal_pembayaran = $row['tanggal_pembayaran'];

}

?>

<div class="page-wrapper">

	<form action="" method="post">
		<div class="container bg-white mt-2 p-3">
			<h3 class="text-center">Form Tambah Data Siswa</h3>
			<a class="btn btn-primary" href="table-siswa.php">Kembali</a>
			<?php if (isset($pesan_sukses)): ?>
				<div class="alert alert-success w-25 mt-3" role="alert">
					<?php echo $pesan_sukses; ?>
				</div>
			<?php endif ?>
			<div class="row col-6 p-4 border rounded-5">
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Jumlah Pembayaran</label>
						<input type="text" class="form-control form-control-sm " name="nis_siswa" id="formGroupExampleInput" value="<?php echo $jumlah; ?>" required>  
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput2" class="form-label">Tanggal Pembayaran</label>
						<input type="date" class="form-control form-control-sm" name="nisn" id="formGroupExampleInput2" 
						value="<?php echo $tanggal_pembayaran; ?>" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput3" class="form-label">Kasir</label>
						<input type="text" class="form-control form-control-sm " name="nama_siswa" id="formGroupExampleInput3" value="<?php echo $nama_kasir; ?>" required>
					</div>
				<div>
					<button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
				</div>
			</div>
		</div>
	</form>
	<!-- akhir -->
</div>
</div>
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="assets/extra-libs/DataTables/datatables.min.js"></script>
<script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
       $("#zero_config").DataTable();
   </script>
</body>
</html>
