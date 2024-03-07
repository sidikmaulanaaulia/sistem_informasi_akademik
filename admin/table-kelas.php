<?php
include 'header.php'; 
$table_kelas = mysqli_query($conn,"SELECT * FROM tabel_kelas");

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
      <h3 class="text-center">Data Kelas</h3>
      <?php if ($_SESSION['posisi'] == 'admin'): ?>
        <a class="btn btn-primary text-white" href="tambah-table-kelas.php"><span class="material-icons">
          playlist_add
        </span></a>
      <?php endif ?>
      <?php if (isset($pesan_sukses)): ?>
         <script>
          Swal.fire({
            text: "<?php echo $pesan_sukses; ?>",
            icon: "success"
          });
        </script>
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
            <?php if ($_SESSION['posisi'] == 'admin'): ?>
              <th>Action</th>
            <?php endif ?>
          </tr>
        </thead>
        <tbody>
         <?php  $no = 1;?> 
         <?php foreach ($table_kelas as $row) : ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['kode_kelas']; ?></td>
            <td><?php echo $row['nama_kelas']; ?></td>
            <td><?php echo $row['tingkat']; ?></td>
            <?php $data_guru = mysqli_query($conn,"SELECT nama_guru FROM tabel_guru WHERE nig_guru='$row[nig_guru]'");
            list($nama_guru) = mysqli_fetch_array($data_guru);
            ?>
            <td><?php echo $nama_guru; ?></td>
            <?php
            $sql ="SELECT COUNT(*) AS total_siswa FROM tabel_siswa WHERE id_kelas = '$row[id_kelas]'";
            $result = mysqli_query($conn,$sql); 
            list($total_siswa) = mysqli_fetch_array($result);
            ?> 
            <td>
              <a class="text-decoration-none" href="table-detail-kelas.php?id=<?php echo  base64_encode($row['id_kelas']); ?>
              "><?php echo $total_siswa; ?></a>
            </td>
            <?php if ($_SESSION['posisi'] == 'admin'): ?>
              <td>
                <a class="btn btn-danger btn-sm" href="hapus-table-kelas.php?id=<?php echo  base64_encode($row['id_kelas']); ?>
                "><span class="material-icons">
                    delete
                  </span></a>
                <a class="btn btn-success btn-sm text-white" href="edit-table-kelas.php?id=<?php echo  base64_encode($row['id_kelas']); ?>
                "><span class="material-icons">
                    edit
                  </span></a>
              </td>
            <?php endif ?>
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
