<?php 
include 'header.php'; 

if (isset($_POST['simpan'])) {
	$nig_guru = mt_rand(100000, 999999);
	$nama_guru = $_POST['nama_guru']; 
	$tanggal_lahir = $_POST['tanggal_lahir']; 
	$alamat = $_POST['alamat']; 
	$jenis_kelamin = $_POST['jenis_kelamin']; 
	$agama = $_POST['agama']; 
	$no_telepone = $_POST['no_telepone']; 
	$pendidikan = $_POST['pendidikan']; 

	$data_siswa = mysqli_query($conn,"INSERT INTO tabel_guru
		(nig_guru,nama_guru,tanggal_lahir,alamat,jenis_kelamin,agama,no_telepone,pendidikan)
		VALUES
		('$nig_guru','$nama_guru','$tanggal_lahir','$alamat','$jenis_kelamin','$agama','$no_telepone','$pendidikan')");

	$pesan_sukses= "Tambah Data Berhasil";
}

?>

<div class="page-wrapper">

	<form action="" method="post">
		<div class="container bg-white mt-2 p-3">
			<h3 class="text-center">From Tambah Data Guru</h3>
			<a class="btn btn-primary" href="table-guru.php">Kembali</a>
			<?php if (isset($pesan_sukses)): ?>
				<script>
					Swal.fire({
						text: "<?php echo $pesan_sukses; ?>",
						icon: "success"
					});
				</script>
			<?php endif ?>
			<div class="row p-4 border rounded-5">
				<div class="col-6">
					<div class="mb-3">
						<label for="formGroupExampleInput2" class="form-label">Nama Guru</label>
						<input type="text" class="form-control form-control-sm " name="nama_guru" id="formGroupExampleInput2" placeholder="nama guru" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput3" class="form-label">Tanggal Lahir</label>
						<input type="date" class="form-control form-control-sm " name="tanggal_lahir" id="formGroupExampleInput3" placeholder="tanggal lahir" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput5" class="form-label">Alamat</label>
						<input type="text" class="form-control form-control-sm " name="alamat" id="formGroupExampleInput5" placeholder="Alamat" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Jenis Kelamin</label>
						<input type="text" class="form-control form-control-sm " name="jenis_kelamin" id="formGroupExampleInput5" placeholder="jenis kelamin" required>
					</div>
				</div>
				<div class="col-6">
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Agama</label>
						<input type="text" class="form-control form-control-sm " name="agama" id="formGroupExampleInput6" placeholder="agama" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">No Telepone</label>
						<input type="text" class="form-control form-control-sm " name="no_telepone" id="formGroupExampleInput5" placeholder="no telepone" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Pendidikan</label>
						<input type="text" class="form-control form-control-sm " name="pendidikan" id="formGroupExampleInput5" placeholder="pendidikan" required>
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
