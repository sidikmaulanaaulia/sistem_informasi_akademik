<?php
include 'koneksi.php';
$table_guru = query("SELECT * FROM tabel_guru");
?>
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center">TABLE DATA GURU</h5>
      <div class="table-responsive">
        <table
        id="zero_config"
        class="table table-striped table-bordered"
        >
        <thead>
          <tr>
            <th>No</th>
            
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Jenis kelamin</th>
            <th>Agama</th>
            <th>No Hp</th>
            <th>Pendidikan</th>
            <th>Guru Mata Pelajaran</th>
          </tr>
        </thead>
        <tbody>
          <?php  $no = 1;?> 
          <?php foreach ($table_guru as $tampil) : ?>

            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $tampil['nama']; ?></td>
              <td><?php echo $tampil['tanggal_lahir']; ?></td>
              <td><?php echo $tampil['alamat']; ?></td>
              <td><?php echo $tampil['jenis_kelamin']; ?></td>
              <td><?php echo $tampil['agama']; ?></td>
              <td><?php echo $tampil['no_telepone']; ?></td>
              <td><?php echo $tampil['pendidikan']; ?></td>
              <td><?php echo $tampil['guru_mata_pelajaran']; ?></td>
            </tr>
            <?php $no++; ?>
          <?php endforeach; ?>                        
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- akhir table guru -->
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
