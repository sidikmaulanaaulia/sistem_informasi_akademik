<?php
include 'kepala.php'; 

$table_kelas = query("SELECT * FROM tabel_kelas");

if (isset($_SESSION['pesan_sukses'])) {
  $pesan_sukses = $_SESSION['pesan_sukses'];
  unset($_SESSION['pesan_sukses']);
}
?>
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center">TABLE KELAS</h5>
      <a class="btn btn-primary text-white" href="tambah-table-kelas.php">Tambah</a>
      <?php if (isset($pesan_sukses)): ?>
        <div class="alert alert-success w-25 mt-3" role="alert">
          <?php echo $pesan_sukses; ?>
        </div>
      <?php endif ?>
      <div class="table-responsive mt-3">
        <table
        id="zero_config"
        class="table table-striped table-bordered "
        >
        <thead>
          <tr>
            <th>No</th>
            <th>No kelas</th>
            <th>Nama Kelas</th>
            <th>Tingkat</th>
            <th>Wali Kelas</th>
            <th>Jumlah Siswa</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>
         <?php  $no = 1;?> 
         <?php foreach ($table_kelas as $row) : ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['nomor_kelas']; ?></td>
            <td><?php echo $row['nama_kelas']; ?></td>
            <td><?php echo $row['tingkat']; ?></td>
            <td><?php echo $row['wali_kelas']; ?></td> 
            <?php
            $sql ="SELECT COUNT(*) AS total_siswa FROM tabel_siswa WHERE id_kelas = '$row[id_kelas]'";
            $result = mysqli_query($conn,$sql); 
             list($total_siswa) = mysqli_fetch_array($result);
            ?> 
            <td class="d-flex gap-4">
              <?php echo $total_siswa; ?>
              <?php if ($total_siswa) : ?>
              <a class="btn btn-primary btn-sm " href="table-detail-kelas.php?id=<?php echo $row['id_kelas'] ?>">Lihat</a>
              <?php endif; ?>
            </td>
            <td>
              <a class="btn btn-danger btn-sm" href="hapus-table-kelas.php?id=<?php echo $row['id_kelas'] ?>">Hapus</a>
              <a class="btn btn-success btn-sm text-white" href="edit-table-kelas.php?id=<?php echo $row['id_kelas'] ?>">Edit</a>
            </td>
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
