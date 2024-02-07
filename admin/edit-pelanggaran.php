<?php 
include 'kepala.php';

if (isset($_POST['simpan'])) {
  $id = base64_decode($_GET['id']);
  $nis_siswa= mysqli_real_escape_string($conn,$_POST['nis_siswa']);
  $tanggal_pelanggaran = mysqli_real_escape_string($conn,$_POST['tanggal_pelanggaran']);
  $pelanggaran = mysqli_real_escape_string($conn,$_POST['pelangaran']);

  $update_pelangaran = mysqli_query($conn,"UPDATE tabel_pelanggaran SET nis_siswa='$nis_siswa',tanggal_pelanggaran='$tanggal_pelanggaran',pelanggaran='$pelanggaran'  WHERE id='$id'");

  $pesan_sukses = "Data Berhasil Di Update";
}

$id = base64_decode($_GET['id']);
$data_pelanggaran = mysqli_query($conn,"SELECT * FROM tabel_pelanggaran WHERE id='$id'");
while ($row = mysqli_fetch_assoc($data_pelanggaran)) {
  $nis_siswa = $row['nis_siswa'];
  $tanggal_pelanggaran = $row['tanggal_pelanggaran'];
  $pelanggaran = $row['pelanggaran'];
}

$data_siswa = mysqli_query($conn,"SELECT nama_siswa FROM tabel_siswa WHERE nis_siswa = $nis_siswa");
list($nama_siswa) = mysqli_fetch_array($data_siswa);

?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper bg-white">
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <!-- start welcome -->
     <h3 class="text-center mt-3">From Edit Data Pelanggaran <?php echo $nama_siswa; ?></h3>
  <form action="" method="post">
    <div class="container mt-2">
      <a class="btn btn-primary w-auto" href="data-pelanggaran.php">Kembali</a>
      <?php if (isset($pesan_sukses)): ?>
         <script>
          Swal.fire({
            text: "<?php echo $pesan_sukses; ?>",
            icon: "success"
          });
        </script>
      <?php endif ?>
      <div class="row border p-4">
      <div class="col-6">
      <div class="mb-3">
        <label for="formGroupExampleInput1" class="form-label">Nis Siswa</label>
        <input type="text" class="form-control form-control-sm " name="nis_siswa" id="formGroupExampleInput2" value="<?php echo $nis_siswa; ?>" required>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Tanggal Pelanggaran</label>
        <input type="date" class="form-control form-control-sm " name="tanggal_pelanggaran" id="formGroupExampleInput2" value="<?php echo $tanggal_pelanggaran; ?>" required>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput3" class="form-label">Pelanggaran</label>
        <input type="text" class="form-control form-control-sm " name="pelangaran" id="formGroupExampleInput2" value="<?php echo $pelanggaran; ?>" required>
      </div>
      <button type="submit" name="simpan" class="btn btn-success btn-sm border text-white rounded-5">Simpan</button>
      </div>
      </div>
    </div>
</form>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>

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