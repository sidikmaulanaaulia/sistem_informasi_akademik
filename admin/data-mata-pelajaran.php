<?php 
include 'kepala.php';

if (isset($_SESSION['pesan_sukses'])) {
  $pesan_sukses = $_SESSION['pesan_sukses'];
  unset($_SESSION['pesan_sukses']); 
}
?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper bg-white">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="card">
    <div class="card-body">
      <h3 class="text-center">Data Mata Pelajaran</h3>
      <?php if ($_SESSION['posisi'] == 'admin'): ?>
        <a class="btn btn-primary text-white" href="tambah-mata-pelajaran.php"><span class="material-icons">
          playlist_add
        </span></a>
        <?php elseif($_SESSION['posisi'] == 'adminperpus') : ?>
          <a class="btn btn-primary text-white" href="tambah-mata-pelajaran.php"><span class="material-icons">
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
          class="table table-striped table-bordered"
          >
          <thead>
            <tr>
              <th>No</th>
              <th>Mata Pelajaran</th>
              <th>Nama Guru</th>
              <?php if ($_SESSION['posisi'] == 'admin'): ?>
                <th>Aksi</th>
              <?php endif ?>
            </tr>
          </thead>
          <tbody>
            <?php
            $data_mapel = mysqli_query($conn,"SELECT * FROM tb_mapel ");
            $no = 1; 
            ?>

            <?php foreach ($data_mapel as $data) : ?>
              <tr>
                <td><?php echo $no;; ?></td>
                <td><?php echo $data['nama_mapel'];  ?></td>
                <?php  $data_guru = mysqli_query($conn,"SELECT nama_guru FROM tabel_guru WHERE nig_guru='$data[nig_guru]'");
                list($nama_guru) = mysqli_fetch_array($data_guru);
                ?>
                <td><?php echo $nama_guru;  ?></td>
                <?php if ($_SESSION['posisi'] == 'admin'): ?>
                  <td>
                    <a class="btn btn-success btn-sm text-white" href="edit-mata-pelajaran.php?id=<?php echo  base64_encode($data['id_mapel']); ?>"><span class="material-icons">
                      edit
                    </span></a>
                    <a class="btn btn-danger btn-sm" href="hapus-mata-pelajaran.php?id=<?php echo  base64_encode($data['id_mapel']); ?>"><span class="material-icons">
                      delete
                    </span></a>
                  </td>
                  <?php elseif($_SESSION['posisi'] == 'adminperpus') : ?>
                    <td>
                      <a class="btn btn-success btn-sm text-white" href="edit-mata-pelajaran.php?id=<?php echo  base64_encode($data['id_mapel']); ?>"><span class="material-icons">
                        edit
                      </span></a>
                      <a class="btn btn-danger btn-sm" href="hapus-mata-pelajaran.php?id=<?php echo  base64_encode($data['id_mapel']); ?>"><span class="material-icons">
                        delete
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
    <!-- akhir kelas -->
  </div>
</div>
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
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