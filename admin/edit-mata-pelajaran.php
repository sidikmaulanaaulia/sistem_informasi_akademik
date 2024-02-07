<?php 
include 'kepala.php';

if (isset($_POST['simpan'])) {
  $id = base64_decode($_GET['id']);
	$mapel = $_POST['mapel'];
  $nig_guru = $_POST['nig_guru'];
  $data_mapel = mysqli_query($conn,"UPDATE tb_mapel SET nig_guru='$nig_guru',nama_mapel='$mapel' WHERE id_mapel='$id' ");
  $pesan_sukses = "Data Berhasil Di Ubah";

}

$id = base64_decode($_GET['id']);
$data_mapel = mysqli_query($conn,"SELECT * FROM tb_mapel WHERE id_mapel = '$id'");
while ($data = mysqli_fetch_assoc($data_mapel)) {
  $nama_mapel = $data['nama_mapel'];
}

?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper bg-white">
 <h3 class="text-center mt-3">From Edit Mata Pelajaran</h3>
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
            <input type="text" class="form-control form-control-sm " name="mapel" id="formGroupExampleInput2"  value="<?php echo $nama_mapel ?>"  required>
          </div>
            <div class="mb-3">
            <label for="guru">Pilih Guru</label>
            <select name="nig_guru" id="guru" class="form-control"_guru required>
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