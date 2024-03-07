<?php
include 'header.php';
$table_user_guru = query("SELECT * FROM tabel_username_guru");
?>
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center">TABLE USERNAME GURU</h5>
      <div class="table-responsive">
        <table
        
        id="zero_config"
        class="table table-striped table-bordered"
        >
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Guru</th>
            <th>NIG</th>
            <th>Username</th>
            <th>Password</th>
            <th>Tanggal Pembuatan Akun</th>
            <th>Status Akun</th>
            
          </tr>
        </thead>
        <tbody>
         <?php  $no = 1;?> 
         <?php foreach ($table_user_guru as $tampil) : ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $tampil['nama_guru']; ?></td>
            <td><?php echo $tampil['nomor_identifikasi_guru']; ?></td>
            <td><?php echo $tampil['username']; ?></td>
            <td><?php echo $tampil['password']; ?></td>
            <td><?php echo $tampil['tanggal_pembuatan_akun']; ?></td>
            <td><?php echo $tampil['status_akun']; ?></td>
          </tr>
          <?php $no++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
</div>
<!-- akhir user login -->
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
