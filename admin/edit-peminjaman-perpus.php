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
$data_peminjaman = mysqli_query($conn,"SELECT * FROM peminjaman WHERE load_id='$id'");
while ($row = mysqli_fetch_assoc($data_peminjaman)) {
  $nis_siswa = $row['nis_siswa'];
  $tanggal_peminjaman = $row['tanggal_peminjaman'];
  $tanggal_pengembalian = $row['tanggal_pengembalian'];
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
        <input type="text" class="form-control form-control-sm" name="nis_siswa" id="formGroupExampleInput1" value="<?php echo $nis_siswa ?>" required>
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
        <input type="date" class="form-control form-control-sm " value="$tanggal_peminjaman" name="tanggal_peminjaman" id="formGroupExampleInput2" required>
      </div>  
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Tanggal Pengembalian</label>
        <input type="date" class="form-control form-control-sm "  value="$tanggal_pengembalian" name="tanggal_pengembalian" id="formGroupExampleInput2" required>
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