<?php 
include 'header.php';


if (isset($_POST['simpan'])) {
   $id = base64_decode($_GET['id']);
  $nis_siswa = $_POST['nis_siswa'];
  $status_kehadiran = $_POST['status_kehadiran'];
  $data_absensi = mysqli_query($conn,"UPDATE tabel_absensi_siswa SET nis_siswa='$nis_siswa',status_kehadiran='$status_kehadiran' WHERE id_absensi='$id'");
  $pesan_sukses = "Data Berhasil Di Ubah";

}
$id = base64_decode($_GET['id']);
$data_absensi_guru = mysqli_query($conn,"SELECT * FROM tabel_absensi_siswa WHERE id_absensi='$id'");
while ($row = mysqli_fetch_assoc($data_absensi_guru)) {
  $nis_siswa = $row['nis_siswa']; 
  $status_kehadiran = $row['status_kehadiran'];
}


?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper bg-white">
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <!-- start welcome -->  
  <h3 class="text-center mt-3">From Edit Absensi Siswa</h3>
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
      <div class="row p-4 border rounded-5">

        <div class="col-6">

          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nis Siswa</label>
            <input type="text" class="form-control form-control-sm " name="nis_siswa" id="formGroupExampleInput" value="<?php echo $nis_siswa ?>" required>
          </div>
          <div class="mb-3">
            <label for="status_kehadiran">Status Kehadiran</label>
            <select name="status_kehadiran" id="status_kehadiran">
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