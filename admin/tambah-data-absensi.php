<?php 
include 'kepala.php';

if (isset($_POST['simpan'])) {
	//batasan jadwal date_default_timezone_set('Asia/Jakarta');
	date_default_timezone_set('Asia/Jakarta');
	  $waktu_sekarang = new DateTime();
	  $mulai_absensi = new DateTime('7:00:00');
	  $berakhir_absensi = new DateTime('24:00:00');
	  if ($waktu_sekarang > $mulai_absensi && $waktu_sekarang < $berakhir_absensi) {
  
		  //cek absensi ketika guru sudah absensi tidak bisa absensi lagi
		  $tanggal_waktu_sekarang = date("Y-m-d H:i:s");
		  $tanggal_sekarang = date("Y-m-d");
		  $waktu_absensi = date("H:i:s", strtotime($tanggal_waktu_sekarang));
		  $nis_siswa = $_POST['nis_siswa'];
      $status_kehadiran = $_POST['status_kehadiran'];
  
		  $cek_absensi = mysqli_query($conn,"SELECT tanggal_absensi FROM tabel_absensi_siswa WHERE nis_siswa='$nis_siswa' AND tanggal_absensi = '$tanggal_sekarang'");
		  if (mysqli_num_rows($cek_absensi) == 1) {
			  echo "<script>
			  alert('Anda sudah absensi');
			  window.location.href = 'tambah-absensi-guru.php';
			  </script>";
			  exit();
  
		  }else{
			  $data_absensi = mysqli_query($conn,"INSERT INTO tabel_absensi_siswa (nis_siswa,tanggal_absensi,status_kehadiran,waktu_absensi) VALUES ('$nis_siswa','$tanggal_sekarang','$status_kehadiran','$waktu_absensi')");
        $pesan_sukses = "Data Berhasil Di Tambahkan";
  
		  }
		  
	  }else{
		  echo "<script>
			  alert('Waktu Sudah Habis');
			  window.location.href = 'tambah-absensi-guru.php';
			  </script>";
			  exit();
	  }
  
  }


?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper bg-white">
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <!-- start welcome -->  
  <h3 class="text-center mt-3">From Absensi Siswa</h3>

  <form action="" method="post">
    <div class="container mt-2">
      <a class="btn btn-primary btn-sm" href="data-absensi.php">Kembali</a>
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
            <input type="text" class="form-control form-control-sm " name="nis_siswa" id="formGroupExampleInput" placeholder="nis siswa" required>
          </div>
          <div class="mb-3">
            <label for="status_kehadiran">Status Kehadiran</label>
            <select name="status_kehadiran" id="status_kehadiran" class="form-control w-25" required>
                <option  disabled selected>Pilih Status</option>
                <option  value="hadir">Hadir</option>
                <option  value="Sakit">Sakit</option>
                <option  value="izin">Izin</option>
                <option  value="tidak hadir">Tidak Hadir</option>
            </select>
          </div>
          <button type="submit" name="simpan" class="btn btn-success btn-sm border text-white rounded-5">Simpan</button>
        </div>
      </div>
    </div>
  </form>
  
  
  <!-- ============================================================== -->
  <!-- End footer -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- End Page wrapper  -->
  <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
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
</body>
</html>