<?php 
include 'kepala.php'; 

if (isset($_POST['simpan'])) {
	$nomor_kelas = $_POST['nomor_kelas'];
	$nama_kelas = $_POST['nama_kelas'];
	$tingkat = $_POST['tingkat'];
	$wali_kelas = $_POST['wali_kelas'];

	$simpan_data_kelas = mysqli_query($conn,"INSERT INTO tabel_kelas (nomor_kelas,nama_kelas,tingkat,wali_kelas)
		VALUES('$nomor_kelas','$nama_kelas','$tingkat','$wali_kelas')");

	$pesan_sukses = "Data Berhasil Di Tambahkan";
}

?>

<div class="page-wrapper">

	<form action="" method="post">
		<div class="container bg-white mt-2 p-3">
			<h3 class="text-center">From Tambah Data Kelas</h3>
			<a class="btn btn-primary" href="table-kelas.php">Kembali</a>
			<?php if (isset($pesan_sukses)): ?>
				<div class="alert alert-success w-25 mt-3" role="alert">
					<?php echo $pesan_sukses; ?>
				</div>
			<?php endif ?>
			<div class="row p-4 border rounded-5">
				<div class="col-6">
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Nomor kelas</label>
						<input type="text" class="form-control form-control-sm " name="nomor_kelas" id="formGroupExampleInput" placeholder="Nomor Kelas" required>  
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Nama Kelas</label>
						<input type="text" class="form-control form-control-sm " name="nama_kelas" id="formGroupExampleInput" placeholder="Nama Kelas" required>  
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Tingkat</label>
						<input type="text" class="form-control form-control-sm " name="tingkat" id="formGroupExampleInput" placeholder="Tingkat" required>  
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Wali kelas</label>
						<input type="text" class="form-control form-control-sm " name="wali_kelas" id="formGroupExampleInput" placeholder="Wali Kelas" required>  
					</div>
					<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
				</div>
				<div>
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
