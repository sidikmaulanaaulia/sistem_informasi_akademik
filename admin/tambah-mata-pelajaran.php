<?php 
include 'kepala.php';

if (isset($_POST['simpan'])) {
	$mapel = $_POST['mapel'];
  $nig_guru = $_POST['nig_guru'];

  $data_mapel = mysqli_query($conn,"INSERT INTO tb_mapel (nig_guru,nama_mapel) VALUES ('$nig_guru','$mapel')");
  $pesan_sukses = "Data Berhasil Di Tambahkan";

}
?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper bg-white">
 <h3 class="text-center mt-3">From Tambah Mata Pelajaran</h3>
  <form action="" method="post">
    <div class="container mt-3">
      <a class="btn btn-primary" href="data-mata-pelajaran.php">Kembali</a>
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
            <label for="formGroupExampleInput2" class="form-label">Mata Pelajaran</label>
            <input type="text" class="form-control form-control-sm " name="mapel" id="formGroupExampleInput2" placeholder="Mata Pelajaran" required>
          </div>
          <div class="mb-3">
            <label for="guru">Pilih Guru</label>
            <select name="nig_guru" id="guru" class="form-control" required>
              <?php   $data_guru =mysqli_query($conn,"SELECT * FROM tabel_guru"); ?>
                <option   disabled selected>Pilih Guru</option>
                <?php foreach ($data_guru as $data) : ?> 
                  <option value="<?php echo $data['nig_guru'];?>" > <?php echo $data['nama_guru']; ?></option>
                <?php endforeach; ?>
            </select>
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