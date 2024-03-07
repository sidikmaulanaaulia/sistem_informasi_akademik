<?php
include 'header.php';
$id_siswa = $_SESSION['id_siswa'];
$id_kelas = $_SESSION['id_kelas'];
$nis_siswa = $_SESSION['nis_siswa'];
$thn_masuk = $_SESSION['tahun_masuk'];
$nama_siswa = $_SESSION['nama_siswa'];

$data_kelas =mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM tabel_kelas WHERE id_kelas='$id_kelas'"));
$nig_guru = $data_kelas['nig_guru'];
$data_siswa = mysqli_query($conn,"SELECT nama_siswa,nis_siswa FROM tabel_siswa WHERE id_kelas='$id_kelas'");
$data_guru = mysqli_fetch_array(mysqli_query($conn,"SELECT nama_guru FROM tabel_guru WHERE nig_guru='$nig_guru'"));
?>
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="card">
    <div class="card-body">
       <h3 class="text-center mt-3">Kelas <?php echo $nama_siswa; ?></h3>
       <h3 class="text-center mt-3">Wali Kelas <?php echo $data_guru['nama_guru']; ?></h3>
      <div class="table-responsive">
        <table
        id="zero_config"
        class="table table-striped table-bordered"
        >
        <thead>
          <tr>
            <th>No</th>
            <th>Nis Siswa</th>
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
