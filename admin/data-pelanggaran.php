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
      <h3 class="text-center">Data Pelanggaran</h3>
      <?php if ($_SESSION['posisi'] == 'admin') : ?>
        <a class="btn btn-primary w-auto" href="tambah-pelanggaran.php"><span class="material-icons">
          playlist_add
        </span></a>
        <?php elseif($_SESSION['posisi'] == 'adminbk') : ?>
          <a class="btn btn-primary w-auto" href="tambah-pelanggaran.php"><span class="material-icons">
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
        <div class="table-responsive">
          <table
          id="zero_config"
          class="table table-striped table-bordered"
          >
          <thead>
            <tr>
              <th>No</th>
              <th>Nis</th>
              <th>Nama Siswa</th>
              <th>Kelas</th>
              <th>Tanggal Pelanggaran</th>
              <th>Pelanggaran</th>
              <?php if ($_SESSION['posisi'] == 'admin') : ?>
                <td>Aksi</td>
                <?php elseif ($_SESSION['posisi'] == 'adminbk') :?>
                  <td>Aksi</td>
                <?php endif; ?>


              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              $data_pelanggaran = mysqli_query($conn,"SELECT * FROM tabel_pelanggaran"); 
              ?>

              <?php foreach($data_pelanggaran as $row) : ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nis_siswa'] ?></td>
                  <?php $data_siswa = mysqli_query($conn,"SELECT id,nama_siswa,id_kelas FROM tabel_siswa WHERE nis_siswa='$row[nis_siswa]' ");
                  list($id,$nama_siswa,$id_kelas) = mysqli_fetch_array($data_siswa); 

                  $data_kelas = mysqli_query($conn,"SELECT nama_kelas FROM tabel_kelas WHERE id_kelas='$id_kelas'");
                  list($nama_kelas) = mysqli_fetch_array($data_kelas);
                  ?>
                  <td><a href="siswa-bk.php?id=<?php echo base64_encode($id) ?>"><?php echo $nama_siswa ?></a></td>
                  <td><?php echo $nama_kelas; ?></td>
                  <td><?php echo $row['tanggal_pelanggaran'] ?></td>
                  <td><?php echo $row['pelanggaran'] ?></td>
                  <?php if ($_SESSION['posisi'] == 'admin') : ?>
                    <td>
                      <a class="btn btn-danger btn-sm" href="hapus-pelanggaran.php?id=<?php echo  base64_encode($row['id']); ?>"><span class="material-icons">
                        delete
                      </span></a>
                      <a class="btn btn-success btn-sm text-white" href="edit-pelanggaran.php?id=<?php echo  base64_encode($row['id']); ?>"><span class="material-icons">
                        edit
                      </span></a>
                    </td>
                    <?php elseif($_SESSION['posisi'] == 'adminbk'): ?>
                      <td>
                          <a class="btn btn-danger btn-sm" href="hapus-pelanggaran?id.php=<?php echo  base64_encode($row['id']); ?>"><span class="material-icons">
                            delete
                          </span></a>
                        <a class="btn btn-success btn-sm text-white" href="edit-pelanggaran.php?id=<?php echo  base64_encode($row['id']); ?>"><span class="material-icons">
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
