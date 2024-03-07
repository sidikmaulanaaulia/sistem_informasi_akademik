<?php
include 'header.php'; 
$table_sekolah = query("SELECT * FROM table_sekolah");
?>
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center">TABLE SEKOLAH</h5>
      <div class="table-responsive">
        <table
        
        id="zero_config"
        class="table table-striped table-bordered"
        >
        <thead>
          <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Sekolah</th>
            <th>Alamat</th>
            <th>Nama Kepala Sekolah</th>
            <th>Nama Direktur</th>
            <th>Email</th>
            <th>NO HP</tha>
            <th>Provinsi</th>
            <th>Kabupaten</th>
            <th>Kecamatan</th>
            <th>Desa</th>
          </tr>
        </thead>
        <tbody>
         <?php  $no = 1;?> 
         <?php foreach ($table_sekolah as $tampil) : ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $tampil['kode']; ?></td>
            <td><?php echo $tampil['nama_sekolah']; ?></td>
            <td><?php echo $tampil['alamat']; ?></td>
            <td><?php echo $tampil['nama_kepsek']; ?></td>
            <td><?php echo $tampil['nama_direktur']; ?></td>
            <td><?php echo $tampil['email']; ?></td>
            <td><?php echo $tampil['no_hp']; ?></td>
            <td><?php echo $tampil['provinsi']; ?></td>
            <td><?php echo $tampil['kabupaten']; ?></td>
            <td><?php echo $tampil['kecamatan']; ?></td>
            <td><?php echo $tampil['desa']; ?></td>
          </tr>
          <?php $no++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
</div>
<!-- akhir table sekolah -->
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
