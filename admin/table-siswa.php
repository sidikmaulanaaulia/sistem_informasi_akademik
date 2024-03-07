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
      <h3 class="text-center">Data Siswa</h3>
      <?php if ($_SESSION['posisi'] == 'admin'): ?>
        <a class="btn btn-primary w-auto" href="tambah-siswa.php"><span class="material-icons">
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
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Tmpat Lahir</th>
            <th>Agama</th>
            <th>Jarak Tempuh </th>
            <th>Nama Orangtua</th>
            <?php if ($_SESSION['posisi'] == 'admin'): ?>
              <th>Aksi</th>
            <?php endif; ?>
          </tr>
        </thead>
        <tbody>

          <?php 
          $query = "SELECT * FROM tabel_siswa";
          $result = mysqli_query($conn, $query);
          $no =1;
          ?>
          <?php foreach ($result as $siswa) : ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $siswa['nis_siswa'] ?></td>
              <td><a href="detail-siswa.php?id=<?php echo  base64_encode($siswa['id']); ?>"><?php echo $siswa['nama_siswa'] ?></a></td>
              <?php $data_kelas = mysqli_query($conn,"SELECT nama_kelas,id_kelas FROM tabel_kelas WHERE id_kelas = '$siswa[id_kelas]'");
              list($nama_kelas,$id_kelas) = mysqli_fetch_array($data_kelas);
              ?>
              <td>
                <a class="text-decoration-none" href="table-detail-kelas.php?id=<?php echo  base64_encode($id_kelas); ?>">
                  <?php echo $nama_kelas ?>
                </a>
              </td>
              <td><?php echo $siswa['alamat'] ?></td>
              <td><?php echo $siswa['tgl_lahir'] ?></td>
              <td><?php echo $siswa['tempat_lahir'] ?></td>
              <td><?php echo $siswa['agama'] ?></td>
              <td><?php echo $siswa['jarak_tempuh'] ?></td>
              <td><?php echo $siswa['nama_ortu'] ?></td>
              <?php if ($_SESSION['posisi'] == 'admin'): ?>
                <td>
                  <div class="d-flex gap-2">
                    <a class="btn btn-success btn-sm text-white" href="edit-siswa.php?id=<?php echo  base64_encode($siswa['id']); ?>"><span class="material-icons">
                      edit
                    </span></a>
                    <a class="btn btn-danger btn-sm text-white" href="hapus-siswa.php?id=<?php echo  base64_encode($siswa['id']); ?>"><span class="material-icons">
                      delete
                    </span></a>
                  </div>
                </td>
              <?php endif; ?>
            </tr>
            
            <?php
            $no++;
            ?> 
            
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
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   </body>
   </html>
