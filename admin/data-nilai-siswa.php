<?php
include 'kepala.php';

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
        <h3 class="text-center">Data Nilai Siswa</h3>
      <?php if ($_SESSION['posisi'] == 'admin') : ?>
        <a class="btn btn-primary w-auto" href="tambah-nilai-siswa.php"><span class="material-icons">
                    playlist_add
                  </span></a>
    <?php elseif($_SESSION['posisi'] == 'adminbk') : ?>
        <a class="btn btn-primary w-auto" href="tambah-nilai-siswa.php"><span class="material-icons">
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
            <th>Nis Siswa</th>
            <th>Nama Siswa</th>
            <th>Tahun Ajaran</th>
            <th>Mata Pelajaran</th>
            <th>Nilai Absensi</th>
            <th>Nilai Kuis</th>
            <th>Nilai Sikap</th>
            <th>Nilai Tugas</th>
            <th>nilai Ujian</th>
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
          $data_nilai = mysqli_query($conn,"SELECT * FROM tb_nilai"); 
          ?>

          <?php foreach($data_nilai as $data) : ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $data['nis_siswa']; ?></td>
              <?php $data_siswa = mysqli_query($conn,"SELECT id,nama_siswa FROM tabel_siswa WHERE nis_siswa= '$data[nis_siswa]' ");
              list($id,$nama_siswa) = mysqli_fetch_array($data_siswa); 
              ?>
              <td><a href="detail-siswa-nilai.php?id=<?php echo base64_encode($id) ?>"><?php echo $nama_siswa; ?></a>
              </td>
              <td><?php echo $data['tahun_ajaran']; ?></td>
              <?php $data_mapel = mysqli_query($conn,"SELECT nama_mapel FROM tb_mapel WHERE id_mapel = '$data[id_mapel]
              '");
              list($nama_mapel) = mysqli_fetch_array($data_mapel);
               ?>
              <td><?php echo $nama_mapel; ?></td>
              <td><?php echo $data['nilai_absensi']; ?></td>
              <td><?php echo $data['nilai_kuis']; ?></td>
              <td><?php echo $data['nilai_sikap']; ?></td>
              <td><?php echo $data['nilai_tugas']; ?></td>
              <td><?php echo $data['nilai_ujian']; ?></td>
               <?php if ($_SESSION['posisi'] == 'admin') : ?>
                <td>
                  <div class="d-flex gap-2">
                  <a class="btn btn-danger btn-sm" href="hapus-nilai-siswa.php?id=<?php echo  base64_encode($data['id_nilai']); ?>"><span class="material-icons">
                    delete
                  </span></a>
                  <a class="btn btn-success btn-sm text-white" href="edit-nilai-siswa.php?id=<?php echo  base64_encode($data['id_nilai']); ?>"><span class="material-icons">
                    edit
                  </span></a>
                  </div>
                </td>
              <?php elseif($_SESSION['posisi'] == 'adminbk'): ?>
                <td>
                  <div class="d-flex gap-2">
                  <a class="btn btn-danger btn-sm" href="hapus-nilai-siswa?id.php=<?php echo  base64_encode($data['id_nilai']); ?>"><span class="material-icons">
                    delete
                  </span></a>
                  <a class="btn btn-success btn-sm text-white" href="edit-nilai-siswa.php?id=<?php echo  base64_encode($data['id_nilai']); ?>"><span class="material-icons">
                    edit
                  </span></a>
                  </div>
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
