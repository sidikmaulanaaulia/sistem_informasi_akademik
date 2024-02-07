<?php 
include 'kepala.php';

if (isset($_POST['simpan'])) {
  $kategori = $_POST['kategori'];

  $kategori_buku = mysqli_query($conn,"INSERT INTO kategori_buku (Kategori_buku) VALUES ('$kategori')");
  $pesan_sukses = "Data Berhasil Di Tambahkan";

}

?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper bg-white">
 <h3 class="text-center mt-3">From Tambah Data Kategori</h3>
  <form action="" method="post">
    <div class="container mt-3">
      <a class="btn btn-primary" href="kategori-data-buku.php">Kembali</a>
      <?php if (isset($pesan_sukses)): ?>
        <div class="alert alert-success mt-2 w-25" role="alert">
          <?php echo $pesan_sukses; ?>
        </div>
      <?php endif ?>
      <div class="row p-4 border rounded-5">

        <div class="col-6">

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Kategori</label>
            <input type="text" class="form-control form-control-sm " name="kategori" id="formGroupExampleInput2" placeholder="Nama Kategori" required>
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