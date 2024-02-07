<?php 
include 'kepala.php'; 

if (isset($_POST['simpan'])) {
	$id = base64_decode($_GET['id']);
	$nig = $_POST['nig']; 
	$nama_guru = $_POST['nama_guru']; 
	$tanggal_lahir = $_POST['tanggal_lahir']; 
	$alamat = $_POST['alamat']; 
	$jenis_kelamin = $_POST['jenis_kelamin']; 
	$agama = $_POST['agama']; 
	$no_telepone = $_POST['no_telepone']; 
	$pendidikan = $_POST['pendidikan']; 

	$data_guru = mysqli_query($conn,"UPDATE tabel_guru SET nig_guru='$nig',nama_guru='$nama_guru',tanggal_lahir='$tanggal_lahir',alamat='$alamat',jenis_kelamin='$jenis_kelamin',agama='$agama',no_telepone='$no_telepone',pendidikan='$pendidikan' WHERE id='$id'");

	$pesan_sukses= "Update Data Berhasil";

}

$id = base64_decode($_GET['id']);
$data_guru = mysqli_query($conn,"SELECT * FROM tabel_guru WHERE id='$id'");

while ($row = mysqli_fetch_assoc($data_guru)) {
	$nig_guru = $row['nig_guru'];
	$nama_guru = $row['nama_guru'];
	$tanggal_lahir = $row['tanggal_lahir'];
	$alamat = $row['alamat'];
	$jenis_kelamin = $row['jenis_kelamin'];
	$agama = $row['agama'];
	$no_telepone = $row['no_telepone'];
	$pendidikan = $row['pendidikan'];
}


$data_kelas = mysqli_query($conn,"SELECT * FROM tabel_kelas");

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
						<label for="formGroupExampleInput" class="form-label">Nig</label>
						<input type="text" class="form-control form-control-sm " name="nig" id="formGroupExampleInput" value="<?php echo $nig_guru ?>" required>  
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput2" class="form-label">Nama Guru</label>
						<input type="text" class="form-control form-control-sm " name="nama_guru" id="formGroupExampleInput2" value="<?php echo $nama_guru ?>" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput3" class="form-label">Tanggal Lahir</label>
						<input type="date" class="form-control form-control-sm " name="tanggal_lahir" id="formGroupExampleInput3"  value="<?php echo $tanggal_lahir ?>" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput5" class="form-label">Alamat</label>
						<input type="text" class="form-control form-control-sm " name="alamat" id="formGroupExampleInput5"  value="<?php echo $alamat ?>" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Jenis Kelamin</label>
						<input type="text" class="form-control form-control-sm " name="jenis_kelamin" id="formGroupExampleInput5"  value="<?php echo $jenis_kelamin ?>" required>
					</div>
				</div>
				<div class="col-6">
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Agama</label>
						<input type="text" class="form-control form-control-sm " name="agama" id="formGroupExampleInput6"  value="<?php echo $agama ?>" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">No Telepone</label>
						<input type="text" class="form-control form-control-sm " name="no_telepone" id="formGroupExampleInput5"  value="<?php echo $no_telepone ?>" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Pendidikan</label>
						<input type="text" class="form-control form-control-sm " name="pendidikan" id="formGroupExampleInput5"  value="<?php echo $pendidikan ?>" required>
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
