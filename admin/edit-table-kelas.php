<?php 
include 'kepala.php'; 

if (isset($_POST['simpan'])) {
	$id_kelas = base64_decode($_GET['id']);
	$kode_kelas = mysqli_real_escape_string($conn,$_POST['kode_kelas']);
	$nama_kelas = mysqli_real_escape_string($conn,$_POST['nama_kelas']);
	$tingkat = mysqli_real_escape_string($conn,$_POST['tingkat']);
	$nig_guru = mysqli_real_escape_string($conn,$_POST['nig_guru']);

	$simpan_data_kelas = mysqli_query($conn,"UPDATE tabel_kelas SET kode_kelas='$kode_kelas',nama_kelas='$nama_kelas',tingkat='$tingkat',nig_guru='$nig_guru' WHERE id_kelas='$id_kelas'");

	$pesan_sukses = "Data Berhasil Di Tambahkan";
}


$id_kelas = base64_decode($_GET['id']);
$data_kelas = mysqli_query($conn,"SELECT * FROM tabel_kelas WHERE id_kelas='$id_kelas'");

while ($row = mysqli_fetch_assoc($data_kelas)) {
	$kode_kelas = $row['kode_kelas'];
	$nama_kelas = $row['nama_kelas'];
	$tingkat = $row['tingkat'];
	$wali_kelas = $row['nig_guru'];
}
?>

<div class="page-wrapper">

	<form action="" method="post">
		<div class="container bg-white mt-2 p-3">
			<h3 class="text-center">From Edit Data Kelas</h3>
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
						<label for="formGroupExampleInput" class="form-label">Nomor kelas</label>
						<input type="text" class="form-control form-control-sm " name="kode_kelas" id="formGroupExampleInput" value="<?php echo $kode_kelas; ?>" required>  
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Nama Kelas</label>
						<input type="text" class="form-control form-control-sm " name="nama_kelas" id="formGroupExampleInput"  value="<?php echo $nama_kelas; ?>" required>  
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Tingkat</label>
						<input type="text" class="form-control form-control-sm " name="tingkat" id="formGroupExampleInput"  value="<?php echo $tingkat; ?>" required>  
					</div>
					<div class="mb-3">
						<select name="nig_guru" id="guru" class="form-control" required>
							<?php   $data_guru =mysqli_query($conn,"SELECT * FROM tabel_guru"); ?>
							<option   disabled selected>Pilih Guru</option>
							<?php foreach ($data_guru as $data) : ?> 
								<option value="<?php echo $data['nig_guru'];?>" > <?php echo $data['nama_guru']; ?></option>
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
