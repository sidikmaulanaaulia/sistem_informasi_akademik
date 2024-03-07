<?php 
include 'header.php';

if (isset($_SESSION['pesan_sukses'])) {
  $pesan_sukses = $_SESSION['pesan_sukses'];
  unset($_SESSION['pesan_sukses']); 
}
?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper bg-white">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="card">
    <div class="card-body">
      <h3 class="text-center">Data Pengguna</h3>
        <div class="table-responsive mt-3">
          <table
          id="zero_config"
          class="table table-striped table-bordered"
          >
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>No Hp</th>
              <th>Alamat</th>
              <th>Posisi</th>
            </tr>
          </thead>
          <?php 
          $no = 1;
          $data_pengguna = mysqli_query($conn,"SELECT * FROM user_sekolah");

           ?>
          <tbody>
            <?php foreach ($data_pengguna as $data) : ?>
              <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $data['username']; ?></td>
              <td><?php echo $data['no_hp']; ?></td>
              <td><?php echo $data['alamat']; ?></td>
              <td><?php echo $data['posisi']; ?></td>
              </tr>
              <?php $no++; ?>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- akhir kelas -->
  </div>
</div>
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