<?php
include 'kepala.php'; ?>
<div class="page-wrapper ">
  <h1 class="text-center mt-5">DAFTAR TABLE</h1>
  <div class="d-flex gap-2 p-5 mt-5">
    <button type="button" class="btn btn-primary"><a class="text-white" href="table-siswa.php">siswa</a></button>
    <button type="button" class="btn btn-primary"><a class="text-white" href="table-pembayaran.php">pembayaran</a></button>
    <button type="button" class="btn btn-primary"><a class="text-white" href="table-pegawai.php">pegawai</a></button>
    <button type="button" class="btn btn-primary"><a class="text-white" href="table-kelas.php">kelas</a></button>
    <button type="button" class="btn btn-primary"><a class="text-white" href="table-guru-bk.php">guru bk</a></button>
    <button type="button" class="btn btn-primary"><a class="text-white" href="table-catatan-guru.php">catatan guru</a></button>
    <button type="button" class="btn btn-primary"><a class="text-white" href="table-pelanggaran.php">pelanggaran</a></button>
    <button type="button" class="btn btn-primary"><a class="text-white" href="table-user-guru.php">user guru</a></button>
    <button type="button" class="btn btn-primary"><a class="text-white" href="table-prestasi.php">prestasi</a></button>
    <button type="button" class="btn btn-primary"><a class="text-white" href="table-sekolah.php">sekolah</a></button>
    <button type="button" class="btn btn-primary"><a class="text-white" href="table-absensi-guru.php">absensi</a></button>
  </div>

</div>
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
<!-- this page js -->
<script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="assets/extra-libs/DataTables/datatables.min.js"></script>
<script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
       $("#zero_config").DataTable();
     </script>
   </body>
   </html>
