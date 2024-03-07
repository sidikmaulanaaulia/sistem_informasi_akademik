s<?php 
include 'header.php'; 

if (isset($_POST['simpan'])) {
	$id = base64_decode($_GET['id']);
	$mapel = $_POST['mapel'];
	$nis_siswa = $_POST['nis_siswa'];
	$tahun_ajaran = $_POST['tahun_ajaran'];
	$nilai_kuis = $_POST['nilai_kuis'];
	$nilai_ujian = $_POST['nilai_ujian'];
	$nilai_tugas = $_POST['nilai_tugas'];
	$nilai_sikap = $_POST['nilai_sikap'];
	$nilai_absensi = $_POST['nilai_absensi'];

	$data_nilai = mysqli_query($conn,"UPDATE tb_nilai SET id_mapel='$mapel', nis_siswa='$nis_siswa',tahun_ajaran='$tahun_ajaran',nilai_kuis = $nilai_kuis,nilai_ujian='$nilai_ujian',nilai_tugas='$nilai_tugas',nilai_sikap='$nilai_sikap',nilai_absensi='$nilai_absensi' WHERE id_nilai= $id ");


	$pesan_sukses = "Data Berhasil Di Tambahkan";
}

$id = base64_decode($_GET['id']);
$data_nilai = mysqli_query($conn,"SELECT * FROM tb_nilai WHERE id_nilai = $id");
while ($row = mysqli_fetch_assoc($data_nilai)) {
	$nis_siswa = $row['nis_siswa'];
	$tahun_ajaran = $row['tahun_ajaran'];
	$nilai_absensi = $row['nilai_absensi'];
	$nilai_kuis = $row['nilai_kuis'];
	$nilai_sikap = $row['nilai_sikap'];
	$nilai_tugas = $row['nilai_tugas'];
	$id_mapel = $row['id_mapel'];
	$nilai_ujian = $row['nilai_ujian'];
	
}

?>

<div class="page-wrapper">

	<form action="" method="post">
		<div class="container bg-white mt-2 p-3">
			<h3 class="text-center">From Edit Nilai Siswa</h3>
			<a class="btn btn-primary" href="data-nilai-siswa.php">Kembali</a>
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
						<label for="formGroupExampleInput" class="form-label">Nis Siswa</label>
						<input type="text" class="form-control form-control-sm " name="nis_siswa" id="formGroupExampleInput" value="<?php echo $nis_siswa; ?>" required>  
					</div>
					<div class="mb-3">
						<?php 	$mata_pelajaran = mysqli_query($conn,"SELECT * FROM tb_mapel") ?>
						<label for="formGroupExampleInput" class="form-label">Mata Pelajaran</label>
						<select name="mapel" class="form-control form-control-sm w-25">
							<option value="" disabled selected>Pilih Mata Pelajaran</option>
							<?php foreach ($mata_pelajaran as $mapel) : ?>
								<?php
								$selected = ($mapel['id_mapel'] == $id_mapel) ? 'selected' : '';
								?>
								<option value="<?php echo $mapel['id_mapel']; ?>" <?php echo $selected; ?>>
									<?php echo $mapel['nama_mapel']; ?>
								</option>
							<?php endforeach; ?>
						</select>

					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Tahun Ajaran</label>
						<input type="datatables" class="form-control form-control-sm " name="tahun_ajaran" id="formGroupExampleInput" value="<?php echo $tahun_ajaran; ?>" required>  
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Nilai Absensi</label>
						<input type="number" class="form-control form-control-sm " name="nilai_absensi" id="formGroupExampleInput" value="<?php echo $nilai_absensi; ?>" required>  
					</div>
				</div>
				<div class="col-6">
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Nilai Kuis</label>
						<input type="number" class="form-control form-control-sm " name="nilai_kuis" id="formGroupExampleInput" value="<?php echo $nilai_kuis; ?>" required>  
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Nilai Tugas</label>
						<input type="number" class="form-control form-control-sm " name="nilai_tugas" id="formGroupExampleInput" value="<?php echo $nilai_tugas; ?>" required>  
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Nilai Sikap</label>
						<input type="number" class="form-control form-control-sm " name="nilai_sikap" id="formGroupExampleInput" value="<?php echo $nilai_sikap; ?>" required>  
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Nilai Ujian</label>
						<input type="number" class="form-control form-control-sm " name="nilai_ujian" id="formGroupExampleInput" value="<?php echo $nilai_ujian; ?>" required>  
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
