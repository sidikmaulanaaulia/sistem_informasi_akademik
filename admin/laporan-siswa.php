<?php
include 'kepala.php';

if (isset($_SESSION['pesan_sukses'])) {
	$pesan_sukses = $_SESSION['pesan_sukses'];
	unset($_SESSION['pesan_sukses']);
}

?>

<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<!-- start table siwa -->
	<div class="card">
		<div class="card-body">
			<h3 class="text-center">Data Laporan Siswa</h3>
				<?php if (isset($pesan_sukses)): ?>
					<div class="alert alert-success w-25 mt-3" role="alert">
						<?php echo $pesan_sukses; ?>
					</div>    
				<?php endif ?>
				<div class="table-responsive">
					<table
					id="zero_config"
					class="table table-striped table-bordered"
					>
					<thead>
						<tr>
							<th>No</th>
							<th>Nis</th>
							<th>Nama Siswa</th>
							<th>Nama Guru Yang Di lapor</th>
							<th>Laporan</th>
							<th>Tanggal Laporan</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$data_pelanggaran = mysqli_query($conn,"SELECT * FROM tb_lapor_guru"); 
						?>

						<?php foreach($data_pelanggaran as $row) : ?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $row['nis_siswa'] ?></td>
								<?php $data_siswa = mysqli_query($conn,"SELECT id,nama_siswa FROM tabel_siswa WHERE nis_siswa='$row[nis_siswa]' ");
								list($id,$nama_siswa) = mysqli_fetch_array($data_siswa); 
								?>
								<td><a href="detail-siswa.php?id=<?php echo base64_encode($id) ?>"><?php echo $nama_siswa ?></a></td>
								<?php $data_guru = mysqli_query($conn,"SELECT nama_guru FROM tabel_guru WHERE nig_guru='$row[nig_guru]' ");
								list($nig_guru) = mysqli_fetch_array($data_guru); 
								?>
								<td><?php echo $nig_guru; ?></td>
								<td><?php echo $row['laporan'] ?></td>
								<td><?php echo $row['tgl_laporan'] ?></td>
							</tr>
							<?php $no++ ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
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
