<?php
include 'kepala.php';
$table_pembayaran = query('SELECT * FROM tabel_pembayaran_uang_sekolah');
?>
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center">TABLE PEMBAYARAN</h5>
      <div class="table-responsive">
        <table
        
        id="zero_config"
        class="table table-striped table-bordered"
        >
        <thead>
          <tr>
            <th>No</th>
            <th>No Pembayaran</th>
            <th>Nama Siswa</th>
            <th>Tanggal Pembayaran</th>
            <th>Deskripsi Pembayaran</th>
            <th>Jumlah Pembayaran</th>
            <th>Metode Pembayaran</th>
            <th>Status Pembayaran</th>
            
          </tr>
        </thead>
        <tbody>
          <?php  $no = 1;?> 
          <?php foreach ($table_pembayaran as $tampil) : ?>

            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $tampil['nomor_pembayaran']; ?></td>
              <td><?php echo $tampil['nama_siswa']; ?></td>
              <td><?php echo $tampil['tanggal_pembayaran']; ?></td>
              <td><?php echo $tampil['deskripsi_pembayaran']; ?></td>
              <td><?php echo $tampil['jumlah_pembayaran']; ?></td>
              <td><?php echo $tampil['metode_pembayaran']; ?></td>
              <td><?php echo $tampil['status_pembayaran']; ?></td>
            </tr>
            <?php $no++; ?>
          <?php endforeach; ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- akhir pembayaran uang sekolah -->
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
