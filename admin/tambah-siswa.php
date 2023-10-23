<?php 
include 'kepala.php'; 

if (isset($_POST['simpan'])) {
	$nis_siswa = $_POST['nis_siswa']; 
	$nisn = $_POST['nisn']; 
	$nama_siswa = $_POST['nama_siswa']; 
	$kelas = $_POST['kelas']; 
	$alamat = $_POST['alamat']; 
	$tanggal_lahir = $_POST['tanggal_lahir']; 
	$tempat_lahir = $_POST['tempat_lahir']; 
	$agama = $_POST['agama']; 
	$jarak_tempuh = $_POST['jarak_tempuh']; 
	$nama_orang_tua = $_POST['nama_orang_tua']; 
	$tahun_masuk = $_POST['tahun_masuk']; 

	$data_siswa = mysqli_query($conn,"INSERT INTO tabel_siswa
		(nis_siswa,nisn,nama_siswa,id_kelas,alamat,tgl_lahir,tempat_lahir,agama,jarak_tempuh,nama_ortu,tahun_masuk) VALUES ('$nis_siswa','$nisn','$nama_siswa','$kelas','$alamat','$tanggal_lahir','$tempat_lahir','$agama','$jarak_tempuh','$nama_orang_tua','$tahun_masuk')
		");

	$pesan_sukses= "Tambah Data Berhasil";
}


$data_kelas = mysqli_query($conn,"SELECT * FROM tabel_kelas");

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
			<div class="row p-4 border rounded-5">
				<div class="col-6">
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Nis Siswa</label>
						<input type="text" class="form-control form-control-sm " name="nis_siswa" id="formGroupExampleInput" placeholder="Nis Siswa" required>  
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput2" class="form-label">Nis</label>
						<input type="text" class="form-control form-control-sm " name="nisn" id="formGroupExampleInput2" placeholder="Nisn" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput3" class="form-label">Nama Siswa</label>
						<input type="text" class="form-control form-control-sm " name="nama_siswa" id="formGroupExampleInput3" placeholder="Nama Siswa" required>
					</div>
					<div class="mb-3">
						<label for="kategori">Kelas</label>
						<select name="kelas" id="kategori">
							<?php foreach ($data_kelas as $row) :?>
								<option  value="<?php echo $row['id_kelas'] ?>"><?php echo $row['nama_kelas'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput5" class="form-label">Alamat</label>
						<input type="text" class="form-control form-control-sm " name="alamat" id="formGroupExampleInput5" placeholder="Alamat" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Tanggal Lahir</label>
						<input type="date" class="form-control form-control-sm " name="tanggal_lahir" id="formGroupExampleInput5" placeholder="Tanggal Lahir" required>
					</div>
				</div>
				<div class="col-6">
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Tempat Lahir</label>
						<input type="text" class="form-control form-control-sm " name="tempat_lahir" id="formGroupExampleInput6" placeholder="tempat_lahir" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Agama</label>
						<input type="text" class="form-control form-control-sm " name="agama" id="formGroupExampleInput5" placeholder="Agama" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Jarak Tempuh</label>
						<input type="text" class="form-control form-control-sm " name="jarak_tempuh" id="formGroupExampleInput5" placeholder="Jarak Tempuh" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Nama Orang Tua</label>
						<input type="text" class="form-control form-control-sm " name="nama_orang_tua" id="formGroupExampleInput5" placeholder="Nama Orang Tua" required>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput6" class="form-label">Tahun Masuk</label>
						<input type="text" class="form-control form-control-sm " name="tahun_masuk" id="formGroupExampleInput5" placeholder="Tahun Masuk" required>
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
