<?php
include 'kepala.php'; 

$table_guru_bk = query("SELECT * FROM tabel_guru_bk");
?>
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <!-- start guru bk -->
  
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center">TABLE GURU BK</h5>
      <div class="table-responsive">
        <table
        
        id="zero_config"
        class="table table-striped table-bordered"
        >
        <thead>
          <tr>
            <th>No</th>
            <th>NIB</th>
            <th>Nama</th>
            <th>Tugas Utamma</th>
            <th>Bidang Konseling</th>
            <th>Kontak</th>
            <th>Tanggal Kesedian</th>
            
          </tr>
        </thead>
        <tbody>
         <?php  $no = 1;?> 
         <?php foreach ($table_guru_bk as $tampil) : ?>

          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $tampil['nomor_identifikasi_bk']; ?></td>
            <td><?php echo $tampil['nama_guru_bk']; ?></td>
            <td><?php echo $tampil['tugas_utama']; ?></td>
            <td><?php echo $tampil['bidang_konseling']; ?></td>
            <td><?php echo $tampil['kontak']; ?></td>
            <td><?php echo $tampil['tanggal_kesediaan']; ?></td>
          </tr>
          <?php $no++; ?>
        <?php endforeach; ?>      
      </tbody>
    </table>
  </div>
</div>
</div>

<!-- akhir guru bk-->
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
