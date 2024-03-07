<?php 
include 'header.php';
$id = base64_decode($_GET['id']);
$siswa = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tabel_siswa WHERE id='$id'"));
$id_siswa = $siswa['id'];
$nis_siswa = $siswa['nis_siswa'];
$nama_siswa = $siswa['nama_siswa'];


?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper bg-white">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- End Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <!-- start welcome -->
  <!-- end welcome -->
  
  <!-- Tabs -->
  <div class="card mt-3">
    <!-- Nav tabs -->
    <h3 class="text-center">Data Absensi <?php echo $nama_siswa; ?></h3>
    <button type="button" class="btn btn-danger dropdown-toggle w-25" data-bs-toggle="dropdown" aria-expanded="false">
      Tahun I
    </button>
    <div class="nav nav-tabs dropdown-menu" id="nav-tab" role="tablist">

    </div>
    <!-- Tab panes -->
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
        <div class="table-responsive">
          <table

          id="zero_config"
          class="table table-striped table-bordered"
          >
          <thead>
            <tr>
              <th>No</th>
              <th>Nis Siswa</th>
              <th>Tanggal Absensi</th>
              <th>Status Kehadiran</th>
              <th>Waktu Kehadiran</th>

            </tr>
          </thead>
          <tbody>
            <?php 
            $no = 1;
            $data_absensi = mysqli_query($conn,"SELECT nis_siswa, tanggal_absensi, status_kehadiran, waktu_absensi FROM tabel_absensi_siswa WHERE nis_siswa = '$nis_siswa' ORDER BY tanggal_absensi ASC");
            ?>
            <?php foreach ($data_absensi as $row) : ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['nis_siswa'] ?></td>
                <td><?php echo $row['tanggal_absensi']; ?></td>
                <td>
                  <?php
                  $status_kehadiran = $row['status_kehadiran'];
                  $warna_teks = '';
                  if ($status_kehadiran == 'hadir') {
                    $warna_teks = 'green';
                  } elseif ($status_kehadiran == 'izin') {
                    $warna_teks = 'orange';
                  } elseif ($status_kehadiran == 'Sakit') {
                    $warna_teks = 'blue';
                  } elseif ($status_kehadiran == 'tidak hadir') {
                    $warna_teks = 'red';
                  }
                  echo '<span style="color: ' . $warna_teks . ';">' . $status_kehadiran . '</span>';
                  ?>
                </td>
                <td>
                  <?php if ($row['status_kehadiran'] == 'izin') {
                    echo "";
                  }elseif ($row['status_kehadiran'] == 'sakit') {
                   echo "";
                  }elseif ($row['status_kehadiran'] == 'tidak hadir') {
                   echo "";
                  }else{
                    echo $row['waktu_absensi'];
                  }

                   ?>
              </td>
              </tr>
              <?php $no++ ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </tbody>
</table>
</div>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>

<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<!--Menu sidebar -->
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<script src="dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
</body>
</html>