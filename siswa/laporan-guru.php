<?php 
include 'kepala.php';

if (isset($_POST['simpan'])) {
  $nis_siswa = $_SESSION['nis_siswa'];
  $tanggal_laporan = date("Y-m-d");
  $laporan = $_POST['laporan'];
  $nig_guru = $_POST['nig_guru']; 

  $data_laporan_guru = mysqli_query($conn,"INSERT INTO tb_lapor_guru (nis_siswa,nig_guru,laporan,tgl_laporan) VALUES
   ('$nis_siswa','$nig_guru','$laporan','$tanggal_laporan')");
  $pesan_sukses = "Berhasil Di Laporkan";

}

?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper bg-white">
 <h3 class="text-center mt-3">Lapor Guru</h3>
 <form action="" method="post">
  <div class="container mt-3">
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
      <label for="formGroupExampleInput2" class="form-label">Lapor Guru</label>
      <div class="mb-3">
        <textarea name="laporan" id="deskripsi" rows="4" cols="50" placeholder="Masukkan deskripsi..." required></textarea>
      </div>
      <div class="mb-3">
        <?php $data_guru = mysqli_query($conn, "SELECT nig_guru, nama_guru FROM tabel_guru"); ?>
        <label for="nig_guru" class="form-label">Nama Guru</label>
        <select name="nig_guru" id="nig_guru" class="form-control w-25 form-control-sm" required>
          <option disabled selected>Pilih</option>
          <?php foreach ($data_guru as $data) : ?>
            <option value="<?php echo $data['nig_guru']; ?>"><?php echo $data['nama_guru']; ?></option>
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