<?php 
include 'kepala.php'; 

if (isset($_POST['simpan'])) {
	$kodeKelas = "KLS-".mt_rand(1000, 9999);
	$nama_kelas = $_POST['nama_kelas'];
	$tingkat = $_POST['tingkat'];
	$nig_guru = $_POST['nig_guru'];

	$simpan_data_kelas = mysqli_query($conn,"INSERT INTO tabel_kelas (kode_kelas,nama_kelas,tingkat,nig_guru)
		VALUES('$kodeKelas','$nama_kelas','$tingkat','$nig_guru')");

	$pesan_sukses = "Data Berhasil Di Tambahkan";
}

?>

<div class="page-wrapper">

	<form action="" method="post">
		<div class="container bg-white mt-2 p-3">
			<h3 class="text-center">From Tambah Data Kelas</h3>
			<a class="btn btn-primary" href="table-kelas.php">Kembali</a>
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
						<label for="formGroupExampleInput" class="form-label">Nama Kelas</label>
						<input type="text" class="form-control form-control-sm " name="nama_kelas" id="formGroupExampleInput" placeholder="Nama Kelas" required>  
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Tingkat</label>
						<input type="text" class="form-control form-control-sm " name="tingkat" id="formGroupExampleInput" placeholder="Tingkat" required>  
					</div>
					<div class="mb-3">
						<?php $data_guru = mysqli_query($conn, "SELECT nig_guru, nama_guru FROM tabel_guru"); ?>
						<label for="nig_guru" class="form-label">Wali kelas</label>
						<select name="nig_guru" id="nig_guru" class="form-control w-25" required>
							<option disabled selected>Pilih Wali Kelas</option>
							<?php foreach ($data_guru as $data) : ?>
								<option value="<?php echo $data['nig_guru']; ?>"><?php echo $data['nama_guru']; ?></option>
							<?php endforeach; ?>
						</select>
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
