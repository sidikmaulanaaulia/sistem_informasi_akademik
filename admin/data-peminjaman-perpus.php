<?php
include 'header.php';

if (isset($_SESSION['pesan_sukses'])) {
  $pesan_sukses = $_SESSION['pesan_sukses'];
  unset($_SESSION['pesan_sukses']);
}

?>

<div class="page-wrapper">
  <!-- ============================================================== -->
  <!--start table siwa -->
  <div class="card">
    <div class="card-body">
      <h3 class="text-center">Data Peminjaman</h3>
      <?php if ($_SESSION['posisi'] == 'admin') : ?>
        <a class="btn btn-primary w-auto" href="tambah-peminjaman-perpus.php"><span class="material-icons">
          playlist_add
        </span></a>
        <?php elseif($_SESSION['posisi'] == 'adminbk') : ?>
          <a class="btn btn-primary w-auto" href="tambah-peminjaman-perpus.php"><span class="material-icons">
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
              <th>Penerbit</th>
              <th>Penerbit</th>
              <th>Tanggal Peminjaman</th>
              <th>Tanggal Pengambalian</th>
              <th>Status</th>
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
              $data_peminjaman = mysqli_query($conn,"SELECT * FROM peminjaman"); 
              ?>

              <?php foreach ($data_peminjaman as $data) :  ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['nis_siswa']; ?></td>
                   <?php $data_siswa = mysqli_query($conn,"SELECT nama_siswa FROM tabel_siswa WHERE nis_siswa = $data[nis_siswa] ");
                  list($nama_siswa) = mysqli_fetch_array($data_siswa);
                   ?>
                   <td><?php echo $nama_siswa; ?></td>
                  <?php $data_buku = mysqli_query($conn,"SELECT judul_buku,penerbit FROM buku WHERE book_id = $data[book_id] ");
                  list($judul_buku,$penerbit) = mysqli_fetch_array($data_buku);
                   ?>
                   <td><?php echo $judul_buku; ?></td>
                   <td><?php echo $penerbit; ?></td>
                  <td><?php echo $data['tanggal_peminjaman']; ?></td>
                  <td><?php echo $data['tanggal_pengembalian']; ?></td>
                  <td><?php echo $data['status']; ?></td>
                    <?php if ($_SESSION['posisi'] == 'admin') : ?>
                    <td>
                      <a class="btn btn-danger btn-sm" href="hapus-peminjaman-perpus.php?id=<?php echo  base64_encode($data['load_id']); ?>"><span class="material-icons">
                        delete
                      </span></a>
                      <a class="btn btn-success btn-sm text-white" href="edit-peminjaman-perpus.php?id=<?php echo  base64_encode($data['load_id']); ?>"><span class="material-icons">
                        edit
                      </span></a>
                    </td>
                    <?php elseif($_SESSION['posisi'] == 'adminbk'): ?>
                      <td>
                        <a class="btn btn-danger btn-sm" href="hapus-peminjaman-perpus?id.php=<?php echo  base64_encode($data['load_id']); ?>"><span class="material-icons">
                          delete
                        </span></a>
                        <a class="btn btn-success btn-sm text-white" href="edit-peminjaman-perpus.php?id=<?php echo  base64_encode($data['load_id']); ?>"><span class="material-icons">
                          edit
                        </span></a>
                      </td>
                    <?php endif ?>
                </tr>
                <?php $no++; ?>
              <?php endforeach ?>

              
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
