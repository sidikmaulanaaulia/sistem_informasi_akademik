<?php
include 'header.php';

$table_catatan_guru = query("SELECT * FROM tabel_catatan_guru");

?>
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center">TABLE CATATAN GURU</h5>
      <div class="table-responsive">
        <table
        
        id="zero_config"
        class="table table-striped table-bordered"
        >
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Tanggal</th>
            <th>Aktivitas Siswa</th>
            <th>Komentar Guru</th>
            
            
          </tr>
        </thead>
        <tbody>
          <?php  $no = 1;?> 
          <?php foreach ($table_catatan_guru as $tampil) : ?>

            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $tampil['nama_siswa']; ?></td>
              <td><?php echo $tampil['tanggal']; ?></td>
              <td><?php echo $tampil['aktivitas_siswa']; ?></td>
              <td><?php echo $tampil['komentar_guru']; ?></td>
            </tr>
            <?php $no++; ?>
          <?php endforeach; ?>                        
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- akhir catatan guru -->
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
