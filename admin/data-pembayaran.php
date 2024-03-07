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
      <h3 class="text-center">Data Pembayaran</h3>
      <?php if ($_SESSION['posisi'] == 'admin'): ?>
        <a class="btn btn-primary w-auto" href="tambah-pembayaran.php"><span class="material-icons">
          playlist_add
        </span></a>
        <?php elseif ($_SESSION['posisi'] == 'adminspp'): ?>
          <a class="btn btn-primary w-auto" href="tambah-pembayaran.php"><span class="material-icons">
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
              <th>Jumlah Pembayaran</th>
              <th>Nama Kasir</th>
              <th>Tanggal Pembayran</th>
              <?php if ($_SESSION['posisi'] == 'admin'): ?>
                <th>Aksi</th>
                <?php elseif ($_SESSION['posisi'] == 'adminspp'): ?>
                  <th>Aksi</th>
                <?php endif; ?>
              </tr>
            </thead>
            <tbody>

              <?php 
              $data_pembayaran = mysqli_query($conn,"SELECT * FROM pembayaran");
              $no =1;
              ?>
              <?php foreach ($data_pembayaran as $row) : ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <?php $data_siswa = mysqli_query($conn,"SELECT id,nama_siswa,id_kelas FROM tabel_siswa WHERE nis_siswa='$row[nis_siswa]'");
                  list($id,$nama_siswa,$id_kelas) = mysqli_fetch_array($data_siswa);
                  ?>
                  <td><?php echo $row['nis_siswa'] ?></td>
                  <td><a href="detail-siswa.php?id=<?php echo  base64_encode($id); ?>"><?php echo $nama_siswa ?></a></td>
                  <?php $data_kelas = mysqli_query($conn,"SELECT nama_kelas FROM tabel_kelas WHERE id_kelas = '$id_kelas' ");
                  list($nama_kelas) = mysqli_fetch_array($data_kelas);
                  ?>
                  <td><?php echo $nama_kelas; ?></td>
                  <td><?php echo $row['jumlah'] ?></td>
                  <td><?php echo $row['nama_kasir'] ?></td>
                  <td><?php echo $row['bulan'] ?></td>
                  <?php if ($_SESSION['posisi'] == 'admin'): ?>
                  </td><td >
                    <a class="btn btn-success btn-sm text-white" href="edit-pembayaran.php?id=<?php echo  base64_encode($row['id']); ?>"><span class="material-icons">
                      edit
                    </span></a>
                    <a class="btn btn-danger btn-sm" href="hapus-pembayaran.php?id=<?php echo  base64_encode($row['id']); ?>"><span class="material-icons">
                      delete
                    </span></a>
                  </td>
                  <?php elseif ($_SESSION['posisi'] == 'adminspp'): ?>
                    <td >
                      <a class="btn btn-success btn-sm text-white" href="edit-pembayaran.php?id=<?php echo  base64_encode($row['id']); ?>"><span class="material-icons">
                        edit
                      </span></a>
                      <a class="btn btn-danger btn-sm" href="hapus-pembayaran.php?id=<?php echo  base64_encode($row['id']); ?>"><span class="material-icons">
                        delete
                      </span></a>
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
   </body>
   </html>
