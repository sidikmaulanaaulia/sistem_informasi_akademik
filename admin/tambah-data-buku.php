<?php 
include 'header.php';

if (isset($_POST['simpan'])) {
  $isbn = $_POST['isbn'];
  $judul_buku = $_POST['judul_buku'];
  $penerbit = $_POST['penerbit'];
  $tahun_terbit = $_POST['tahun_terbit'];
  $kode_rak = $_POST['kode_rak'];
  $kategori = $_POST['kategori'];

  $data_buku = mysqli_query($conn,"INSERT INTO buku (isbn,judul_buku,penerbit,tahun_terbit,kode_rak,id_kategori) VALUES ('$isbn','$judul_buku','$penerbit','$tahun_terbit','$kode_rak','$kategori')");
  $pesan_sukses = "Data Berhasil Di Tambahkan";

}


$kategori_buku = mysqli_query($conn,"SELECT * FROM kategori_buku");
?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper bg-white">
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <!-- start welcome -->  
  <h3 class="text-center">From Tambah Data Buku</h3>

  <form action="" method="post">
    <div class="container mt-2">
      <a class="btn btn-primary btn-sm" href="data-buku-perpus.php">Kembali</a>
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
            <label for="formGroupExampleInput" class="form-label">Isbn</label>
            <input type="text" class="form-control form-control-sm " name="isbn" id="formGroupExampleInput" placeholder="Isbn" required>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Judul Buku</label>
            <input type="text" class="form-control form-control-sm " name="judul_buku" id="formGroupExampleInput2" placeholder="judul buku" required>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput3" class="form-label">Penerbit</label>
            <input type="text" class="form-control form-control-sm " name="penerbit" id="formGroupExampleInput3" placeholder="Penerbit" required>
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label for="formGroupExampleInput4" class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control form-control-sm " name="tahun_terbit" id="formGroupExampleInput4" placeholder="Tahun Terbit" required>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput5" class="form-label">Kode Rak</label>
            <input type="text" class="form-control form-control-sm " name="kode_rak" id="formGroupExampleInput5" placeholder="Kode Rak" required>
          </div>
          <label for="kategori">Kategori</label>
          <select name="kategori" id="kategori"  class="form-control w-25" required>
            <option disabled selected>Pilih Kategori</option>
            <?php foreach ($kategori_buku as $row) :?>
              <option  value="<?php echo $row['id_kategori'] ?>"><?php echo $row['kategori_buku'] ?></option>
            <?php endforeach; ?>
          </select>
          <div>
            <button type="submit" name="simpan" class="btn btn-primary btn-sm border rounded-5 mt-3">Simpan</button>
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