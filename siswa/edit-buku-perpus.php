<?php 
include '../admin/kepala.php';

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $isbn = $_POST['isbn'];
  $judul_buku = $_POST['judul_buku'];
  $penerbit = $_POST['penerbit'];
  $tahun_terbit = $_POST['tahun_terbit'];
  $kode_rak = $_POST['kode_rak'];
  $id_kategori = $_POST['id_kategori'];

  $update_data = mysqli_query($conn,"UPDATE buku SET isbn='$isbn',judul_buku='$judul_buku',penerbit='$penerbit',tahun_terbit='$tahun_terbit',kode_rak='$kode_rak',id_kategori='$id_kategori'  WHERE book_id='$id'");
  $data_berhasil = "Data Berhasil Di Update";
}else{
}



$id = $_GET['id'];
$data_buku = mysqli_query($conn,"SELECT * FROM buku WHERE book_id='$id'");
while ($row = mysqli_fetch_assoc($data_buku)) {
  $isbn = $row['isbn'];
  $judul_buku = $row['judul_buku'];
  $penerbit = $row['penerbit'];
  $tahun_terbit = $row['tahun_terbit'];
  $kode_rak = $row['kode_rak'];
  $id_kategori = $row['id_kategori'];
}

?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper bg-white">
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <!-- start welcome -->
  <div class="fs-1">Dashboard Data Buku Perpus </div>
  <form action="" method="post">
    <div class="container mt-2">
          <a class="btn btn-primary  w-auto " href="data-buku-perpus.php">Kembali</a>
      <?php if (isset($data_berhasil)): ?>
        <div class="alert alert-success w-25 mt-2" role="alert">
          <?php echo $data_berhasil; ?>
        </div>
      <?php endif ?>
      <div class=" row p-4 border">
        <div class="col-6">
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Isbn</label>
        <input type="text" class="form-control form-control-sm " name="isbn" id="formGroupExampleInput"  value="<?php echo $isbn; ?>" required>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Judul Buku</label>
        <input type="text" class="form-control form-control-sm " name="judul_buku" id="formGroupExampleInput2" value="<?php echo $judul_buku ?>" required>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput3" class="form-label">Penerbit</label>
        <input type="text" class="form-control form-control-sm " name="penerbit" id="formGroupExampleInput3" value="<?php echo $penerbit ?>" required>
      </div>
        </div>
        <div class="col-6">
      <div class="mb-3">
        <label for="formGroupExampleInput4" class="form-label">Tahun Terbit</label>
        <input type="text" class="form-control form-control-sm " name="tahun_terbit" id="formGroupExampleInput4" value="<?php echo $tahun_terbit ?>" required>
      </div>
          
      <div class="mb-3">
        <label for="formGroupExampleInput5" class="form-label">Kode Rak</label>
        <input type="text" class="form-control form-control-sm " name="kode_rak" id="formGroupExampleInput5" value="<?php echo $kode_rak  ?>" required>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput6" class="form-label">Kategori</label>
        <input type="text" class="form-control form-control-sm " name="id_kategori" id="formGroupExampleInput5" value="<?php echo $id_kategori ?>" required>
      </div>
      <div>
        <button type="submit" name="update" class="btn btn-success btn-sm border text-white rounded-5">Update</button>
      </div>
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