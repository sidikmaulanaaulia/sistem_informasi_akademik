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
      <h3 class="text-center">Data guru</h3>
      <?php if ($_SESSION['posisi'] == 'admin'): ?>
        <a class="btn btn-primary w-auto" href="tambah-guru.php"><span class="material-icons">
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
            <th>Nig</th>
            <th>Nama Guru</th>
            <th>Alamata</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Guru Mata Pelajaran</th>
            <th>Agama</th>
            <th>Pendidikan </th>
            <th>No Telepon</th>
            <?php if ($_SESSION['posisi'] == 'admin'): ?>
              <th>Aksi</th>
            <?php endif; ?>
          </tr>
        </thead>
        <tbody>

          <?php
          $data_guru = mysqli_query($conn,"SELECT * FROM tabel_guru"); 
          $no =1;
          ?>
          <?php foreach ($data_guru as $guru) : ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $guru['nig_guru'] ?></td>
              <td><a href="detail-guru.php?id=<?php echo  base64_encode($guru['id']); ?>"><?php echo $guru['nama_guru'] ?></a></td>
              <td><?php echo $guru['alamat'] ?></td>
              <td><?php echo $guru['tanggal_lahir'] ?></td>
              <td><?php echo $guru['alamat'] ?></td>
              <td><?php echo $guru['jenis_kelamin'] ?></td>
              <?php $data_mapel = mysqli_query($conn,"SELECT nama_mapel FROM tb_mapel WHERE nig_guru = '$guru[nig_guru]'");
              list($nama_mapel) = mysqli_fetch_array($data_mapel);
              ?>
              <td><?php echo $nama_mapel ?></td>
              <td><?php echo $guru['agama'] ?></td>
              <td><?php echo $guru['pendidikan'] ?></td>
              <td><?php echo $guru['no_telepone'] ?></td>
              <?php if ($_SESSION['posisi'] == 'admin'): ?>
                <td>
                  <div class="d-flex gap-2">
                  <a class="btn btn-success btn-sm text-white" href="edit-guru.php?id=<?php echo  base64_encode($guru['id']); ?>"><span class="material-icons">
                    edit
                  </span></a>
                  <a class="btn btn-danger btn-sm" href="hapus-guru.php?id=<?php echo  base64_encode($guru['id']); ?>"><span class="material-icons">
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
   </body>
   </html>
