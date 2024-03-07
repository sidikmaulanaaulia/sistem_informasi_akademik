<?php
include 'header.php';


if (isset($_SESSION['pesan_sukses'])) {
  $pesan_sukses = $_SESSION['pesan_sukses'];
  unset($_SESSION['pesan_sukses']);
}

?>

<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <!-- start table siwa -->
  <div class="card">
    <div class="card-body">
      <h3 class="text-center">Data Absensi Siswa</h3>
      <?php if ($_SESSION['posisi'] == 'admin'): ?>
        <a class="btn btn-primary w-auto" href="tambah-data-absensi.php">Absensi</a>
        <?php elseif ($_SESSION['posisi'] == 'adminspp'): ?>
          <a class="btn btn-primary w-auto" href="tambah-data-absensi.php">Absensi</a>
        <?php endif ?>
        <?php if (isset($pesan_sukses)): ?>
          <script>
            Swal.fire({
              text: "<?php echo $pesan_sukses; ?>",
              icon: "success"
            });
          </script> 
        <?php endif ?>
        <div class="table-responsive">
          <table
          id="zero_config"
          class="table table-striped table-bordered"
          >
          <thead>
            <tr>
              <th>No</th>
              <th>Nis Siswa</th>
              <th>Nama Siswa</th>
              <th>Tanggal Absensi</th>
              <th>Status Kehadiran</th>
              <th>Waktu Absesi</th>
              <?php if ($_SESSION['posisi'] == 'admin'): ?>
                <th>Aksi</th>
                <?php elseif ($_SESSION['posisi'] == 'adminspp'): ?>
                  <th>Aksi</th>
                <?php endif; ?>
              </tr>
            </thead>
            <tbody>
             <?php
             $data_absensi = mysqli_query($conn,"SELECT * FROM tabel_absensi_siswa ORDER BY tanggal_absensi ASC");
             $no = 1;
             ?>

             <?php foreach($data_absensi as $row) : ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['nis_siswa'] ?></td>
                <?php $data_siswa = mysqli_query($conn,"SELECT id,nama_siswa,id_kelas FROM tabel_siswa WHERE nis_siswa='$row[nis_siswa]'");
                list($id,$nama_siswa,$id_kelas) = mysqli_fetch_array($data_siswa);
                ?>
                <td><a href="testing.php?id=<?php echo base64_encode($id) ?>"><?php echo $nama_siswa ?></a></td>
                <td><?php echo $row['tanggal_absensi'] ?></td>
                <td><?php echo $row['status_kehadiran'] ?></td>
                <td><?php echo $row['waktu_absensi'] ?></td>
                <?php if ($_SESSION['posisi'] == 'admin') : ?>
                  <td>
                    <a class="btn btn-danger btn-sm" href="hapus-absensi-siswa.php?id=<?php echo  base64_encode($row['id_absensi']); ?>"><span class="material-icons">
                      delete
                    </span></a>
                    <a class="btn btn-success btn-sm text-white" href="edit-absensi-siswa.php?id=<?php echo  base64_encode($row['id_absensi']); ?>"><span class="material-icons">
                      edit
                    </span></a>
                  </td>
                  <?php elseif($_SESSION['posisi'] == 'adminbk'): ?>
                    <td>
                      <a class="btn btn-danger btn-sm" href="hapus-absensi-siswa?id.php=<?php echo  base64_encode($row['id_absensi']); ?>"><span class="material-icons">
                        delete
                      </span></a>
                      <a class="btn btn-success btn-sm text-white" href="edit-absensi_siswa.php?id=<?php echo  base64_encode($row['id_absensi']); ?>"><span class="material-icons">
                        edit
                      </span></a>
                    </td>
                  <?php endif ?>
                </tr>
                <?php $no++ ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- akhir -->
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
