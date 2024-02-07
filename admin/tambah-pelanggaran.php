<?php 
include 'kepala.php';

if (isset($_POST['simpan'])) {
  $nis_siswa = $_POST['nis_siswa'];
  $pelanggaran = $_POST['pelanggaran'];
  $tanggal_pelanggaran = $_POST['tanggal_pelanggaran'];

  $data_pelanggaran = mysqli_query($conn,"INSERT INTO tabel_pelanggaran (nis_siswa,tanggal_pelanggaran,pelanggaran) VALUES ('$nis_siswa','$tanggal_pelanggaran','$pelanggaran')");
  $pesan_sukses = "Data Berhasil Di Tambahkan";
}

?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper bg-white">
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <h3 class="text-center">From Tambah Data Pelanggaran</h3>
  <form action="" method="post">
    <div class="container mt-2">
      <a class="btn btn-primary" href="data-pelanggaran.php">Kembali</a>
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
            <label for="formGroupExampleInput1" class="form-label">Nis Siswa</label>
            <input type="text" class="form-control form-control-sm" name="nis_siswa" id="formGroupExampleInput1" placeholder="Nis Siswa" required>
          </div>         
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Tanggal Pelanggaran</label>
            <input type="date" class="form-control form-control-sm " name="tanggal_pelanggaran" id="formGroupExampleInput2" placeholder="" required>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput3" class="form-label">Pelanggaran</label>
            <input type="text" class="form-control form-control-sm " name="pelanggaran" id="formGroupExampleInput2" placeholder="Pelanggaran" required>
          </div>
          <button type="submit" name="simpan" class="btn btn-success btn-sm border text-white rounded-5">Simpan</button>
        </div>
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