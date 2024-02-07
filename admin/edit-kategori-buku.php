<?php 
include 'kepala.php';

if (isset($_POST['update'])) {
  $id_kategori = base64_decode($_GET['id']);
  $kategori =  mysqli_real_escape_string($conn,$_POST['kategori']);
  $update_data = mysqli_query($conn,"UPDATE nama_kategori='$kategori'  WHERE id_kategori='$id_kategori'");
  $data_berhasil = "Data Berhasil Di Update";
}else{
}



$id_kategori = base64_decode($_GET['id']);
$kategori_buku = mysqli_query($conn,"SELECT * FROM kategori_buku WHERE id_kategori='$id_kategori'");
while ($row = mysqli_fetch_assoc($kategori_buku)) {
  $kategori = $row['kategori_buku'];
}

?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper bg-white">
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <!-- start welcome -->
     <h3 class="text-center">From Edit Data Kategori Buku</h3>
  <form action="" method="post">
    <div class="container mt-2">
      <a class="btn btn-primary  w-auto " href="kategori-data-buku.php">Kembali</a>
      <?php if (isset($data_berhasil)): ?>
        <div class="alert alert-success w-25 mt-2" role="alert">
          <?php echo $data_berhasil; ?>
        </div>
      <?php endif ?>
      <div class="row border p-4">
        
      <div class="col-6">
        
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Kategori</label>
        <input type="text" class="form-control form-control-sm " name="kategori" id="formGroupExampleInput2" value="<?php echo $kategori ?>" required>
      </div>
      <button type="submit" name="update" class="btn btn-success btn-sm border text-white rounded-5">Update</button>
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