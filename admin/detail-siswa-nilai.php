<?php 
include 'kepala.php';
$id = base64_decode($_GET['id']);
$siswa = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tabel_siswa WHERE id='$id'"));
$id_siswa = $siswa['id'];
$nis_siswa = $siswa['nis_siswa'];
$nama_siswa = $siswa['nama_siswa'];
$thn_masuk = $siswa['tahun_masuk'];


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
<h3 class="text-center">Data Nilai <?php echo $nama_siswa; ?></h3>
    <div class="nav nav-tabs " id="nav-tab" role="tablist">
      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tahun I</button>
      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Tahun II</button>
      <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Tahun III</button>
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
              <th>Tahun Ajaran</th>
              <th>Mata Pelajaran</th>
              <th>Nilai Absensi</th>
              <th>Nilai Kuis</th>
              <th>Nilai Sikap</th>
              <th>Nilai Tugas</th>
              <th>Nilai Ujian</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1; 
            $data_nilai = mysqli_query($conn,"SELECT * FROM tb_nilai WHERE nis_siswa=$nis_siswa");
             ?>
         <?php foreach ($data_nilai as $data) : ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['tahun_ajaran']; ?></td>
            <?php $data_mapel = mysqli_query($conn,"SELECT nama_mapel FROM tb_mapel WHERE id_mapel = '$data[id_mapel]'");
            list($nama_mapel) = mysqli_fetch_array($data_mapel);

             ?>
            <td><?php echo $nama_mapel;?></td>
            <td><?php echo $data['nilai_absensi']; ?></td>
            <td><?php echo $data['nilai_kuis']; ?></td>
            <td><?php echo $data['nilai_sikap']; ?></td>
            <td><?php echo $data['nilai_tugas']; ?></td>
            <td><?php echo $data['nilai_ujian']; ?></td>
          </tr>
         <?php $no++ ?>
         <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
      <div class="table-responsive">
        <table

        id="zero_config"
        class="table table-striped table-bordered"
        >
        <thead>
          <tr>

          </tr>
        </thead>
        <tbody>
          <tr>
            
          </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
  <div class="table-responsive">
    <table

    id="zero_config"
    class="table table-striped table-bordered"
    >
    <thead>
      <tr>
      
      </tr>
    </thead>
    <tbody>
      <tr>
        
      </tr>
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