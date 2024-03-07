<?php
include 'header.php';

$id_kelas = base64_decode($_GET['id']);

$data_kelas =mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM tabel_kelas WHERE id_kelas='$id_kelas'"));
$data_siswa = mysqli_query($conn,"SELECT nama_siswa,nis_siswa FROM tabel_siswa WHERE id_kelas='$id_kelas'");
$data_guru = mysqli_fetch_array(mysqli_query($conn,"SELECT nama_guru FROM tabel_guru WHERE nig_guru='$data_kelas[nig_guru]'"));
?>
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="card">
    <div class="card-body">
      <div class="fs-3 text-center mt-3">Data Kelas <?php  echo $data_kelas['nama_kelas']; ?></div>
      <h5 class="card-title text-center">Wali Kelas <?php echo $data_guru['nama_guru'];  ?></h5>
      <a class="btn btn-primary " href="table-kelas.php">Kembali</a>
      <div class="table-responsive">
        <table
        id="zero_config"
        class="table table-striped table-bordered"
        >
        <thead>
          <tr>
            <th>No</th>
            <th>Nisn</th>
            <th>Nama siswa</th>
          </tr>
        </thead>
          <?php $no = 1; ?>
        <tbody>
          <?php foreach ($data_siswa as $row) : ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['nis_siswa']; ?></td>
            <td><?php echo $row['nama_siswa']; ?></td>
            
          </tr>
          <?php $no++ ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
</div>
<!-- akhir kelas -->
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
