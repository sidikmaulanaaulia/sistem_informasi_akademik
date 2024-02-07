<?php 
include 'kepala.php';

if (isset($_POST['simpan'])) {
  $nis_siswa = $_POST['nis_siswa'];
  $jumlah_pembayaran = $_POST['jumlah_pembayaran'];
  $nama_kasir = $_POST['nama_kasir'];
  $bulan = $_POST['bulan'];
  $timestamp = strtotime($bulan);
  $tanggal_baru = date("y-m-10", $timestamp);


  $data_pelanggaran = mysqli_query($conn,"INSERT INTO pembayaran (nis_siswa,jumlah,nama_kasir,bulan) VALUES ('$nis_siswa','$jumlah_pembayaran','$nama_kasir','$tanggal_baru')");
  $pesan_sukses = "Data Berhasil Di Tambahkan";
}

?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper bg-white">
  <!-- Container fluid  -->
  <!-- ============================================================== -->
 <h3 class="text-center">From Tambah Pembayaran</h3>
  <form action="" method="post">
    <div class="container mt-2">
      <a class="btn btn-primary btn-sm" href="data-pembayaran.php">Kembali</a>
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
            <label for="formGroupExampleInput2" class="form-label">jumlah Bayar</label>
            <input type="number" class="form-control form-control-sm" name="jumlah_pembayaran" id="formGroupExampleInput2" placeholder="Jumlah Pembayaran" required>
          </div> 
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Kasir</label>
            <input type="text" class="form-control form-control-sm " name="nama_kasir" id="formGroupExampleInput2" placeholder="Nama Kasir" required>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Tanggal Pembayaran</label>
            <input type="date" class="form-control form-control-sm " name="bulan" id="formGroupExampleInput2" required>
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