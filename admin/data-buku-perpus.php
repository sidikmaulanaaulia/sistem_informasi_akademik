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
      <h3 class="text-center">Data Buku</h3>
      <?php if ($_SESSION['posisi'] == 'admin'): ?>
        <a class="btn btn-primary text-white" href="tambah-data-buku.php"><span class="material-icons">
          playlist_add
        </span></a>
        <?php elseif($_SESSION['posisi'] == 'adminperpus') : ?>
          <a class="btn btn-primary text-white" href="tambah-data-buku.php"><span class="material-icons">
            playlist-add
          </span></a>
        <?php endif ?>
        <a class="btn btn-outline-secondary" href="kategori-data-buku.php">Kategori Buku</a>
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
              <th>Isbn</th>
              <th>Judul Buku</th>
              <th>Penerbit</th>
              <th>Tahun Terbit</th>
              <th>Kode Rak</th>
              <th>Kategori</th>
              <?php if ($_SESSION['posisi'] == 'admin'): ?>
                <th>Aksi</th>
              <?php endif ?>

            </tr>
          </thead>
          <tbody>
            <?php
            $data_buku = mysqli_query($conn,"SELECT * FROM buku ");
            $no = 1; 
            ?>

            <?php foreach ($data_buku as $data) : ?>
              <tr>
                <td><?php echo $no;; ?></td>
                <td><?php echo $data['isbn'];  ?></td>
                <td><?php echo $data['judul_buku'];  ?></td>
                <td><?php echo $data['penerbit'];  ?></td>
                <td><?php echo $data['tahun_terbit'];  ?></td>
                <td><?php echo $data['kode_rak'];  ?></td>
                <?php $kategori_buku = mysqli_query($conn,"SELECT kategori_buku FROM kategori_buku WHERE id_kategori = '$data[id_kategori]' ");
                list($kategori_buku) = mysqli_fetch_array($kategori_buku); ?>

                <td><?php echo $kategori_buku ?></td>
                <?php if ($_SESSION['posisi'] == 'admin'): ?>
                  <td>
                    <a class="btn btn-success btn-sm text-white" href="edit-buku-perpus.php?id=<?php echo  base64_encode($data['book_id']); ?>"><span class="material-icons">
                      edit
                    </span></a>
                    <a class="btn btn-danger btn-sm" href="hapus-buku-perpus.php?id=<?php echo  base64_encode($data['book_id']); ?>"><span class="material-icons">
                      delete
                    </span></a>
                  </td>
                  <?php elseif($_SESSION['posisi'] == 'adminperpus') : ?>
                    <td>
                      <a class="btn btn-success btn-sm text-white" href="edit-buku-perpus.php?id=<?php echo  base64_encode($data['book_id']); ?>"><span class="material-icons">
                        edit
                      </span></a>
                      <a class="btn btn-danger btn-sm" href="hapus-buku-perpus.php?id=<?php echo  base64_encode($data['book_id']); ?>"><span class="material-icons">
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