<?php 
include 'kepala.php';

if (isset($_POST['simpan'])) {
  $book_id = $_POST['book_id'];
  $nis_siswa = $_POST['nis_siswa'];
  $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
  $tanggal_pengembalian = $_POST['tanggal_pengembalian'];

  $data_peminjaman = mysqli_query($conn,"INSERT INTO peminjaman (book_id,nis_siswa,tanggal_peminjaman,tanggal_pengembalian) 
    VALUES('$book_id','$nis_siswa','$tanggal_peminjaman','$tanggal_pengembalian') ");
  $pesan_sukses = "Data Berhasil Di Tambahkan";
}

?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper bg-white">
  <!-- Container fluid  -->
  <!-- ============================================================== -->
 <h3 class="text-center">From Tambah Peminjaman Perpus</h3>
  <form action="" method="post">
    <div class="container mt-2">
      <a class="btn btn-primary btn-sm" href="data-peminjaman-perpus.php">Kembali</a>
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
            <?php $data_buku = mysqli_query($conn,"SELECT * FROM buku"); ?>
            <label for="judul_buku" class="form-label">Buku</label>
            <select name="book_id" id="judul_buku">
              <?php foreach ($data_buku as $data) : ?>
              <option value="<?php echo $data['book_id']; ?>"><?php echo $data['judul_buku']; ?></option>
            <?php endforeach; ?>
            </select>
          </div> 
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Tanggal Peminjaman</label>
            <input type="date" class="form-control form-control-sm " name="tanggal_peminjaman" id="formGroupExampleInput2" required>
          </div>  
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Tanggal Pengembalian</label>
            <input type="date" class="form-control form-control-sm " name="tanggal_pengembalian" id="formGroupExampleInput2" required>
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