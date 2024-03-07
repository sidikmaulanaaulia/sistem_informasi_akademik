<?php 
include 'header.php';
$id_siswa = $_SESSION['id_siswa'];
$nis_siswa = $_SESSION['nis_siswa'];
$thn_masuk = $_SESSION['tahun_masuk'];
$nama_siswa = $_SESSION['nama_siswa'];

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
    <h3 class="text-center mt-3">Pembayaran <?php echo $nama_siswa; ?></h3>
  <!-- end welcome -->
  
  <!-- Tabs -->
  <div class="card mt-3">
    <!-- Nav tabs -->
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
              <th>bulan</th>
              <th>Jumlah Pembayaran</th>
              <th>Kasir</th>
              <th>Status Pembayaran</th>

            </tr>
          </thead>
          <tbody>
          <?php 
      $hari_ini= date('Y-m-d  h:i:s');
      $no=1;
      $thn_masuk    = date('Y-m-d',strtotime($thn_masuk)); 
      $data_bulan = mysqli_query($conn,"SELECT * FROM bulan WHERE tanggal >= '$thn_masuk' ORDER BY id limit 12");
      ?>
      <?php while($row = mysqli_fetch_array($data_bulan)) : ?>
        <tr>
          <td><?php echo $no; ?></td>
          <?php 
          $bulan = $row['tanggal'];
          $nama_bulan = $row['nama_bulan'];
          $tgl3    = date('Y', strtotime($bulan));
          ?>
          <td><?php echo $row['nama_bulan'].''.$tgl3; ?></td>
          <!-- jumlah pembayaran -->
          <?php
          $data_jumlah = mysqli_query($conn,"SELECT nama_kasir,jumlah FROM pembayaran WHERE nis_siswa='$nis_siswa' AND bulan='$bulan'");
          list($nama_kasir,$jumlah) = mysqli_fetch_array($data_jumlah);
          $jumlah = number_format($jumlah);
          ?>
          <td>Rp.<?php echo $jumlah; ?> </td>
          <!-- nama kasir -->
          <td><?php echo $nama_kasir; ?></td>
          <!-- status pembayaran -->
          <td><?php echo ($jumlah >=1) ?  '<i class="fa fa-check" aria-hidden="true"><font color="blue">Lunas</font></i>' : '<em><font color="red">Nunggak</font></em>'; ?></td>
          <?php $no++ ?>
        </tr>
      <?php endwhile; ?> 

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
            <th>No</th>
            <th>bulan Pembayaran</th>
            <th>Jumlah Pembayaran</th>
            <th>kasir</th>
            <th>Status Pembayaran</th>

          </tr>
        </thead>
        <tbody>
          <?php 
      $hari_ini= date('Y-m-d  h:i:s');
      $no=1;
      $thn_masuk2    = date('Y-m-d', strtotime('+1 years', strtotime($thn_masuk))); 
      $data_bulan = mysqli_query($conn,"SELECT * FROM bulan WHERE tanggal >= '$thn_masuk2' ORDER BY id limit 12");
      ?>
      <?php while($row = mysqli_fetch_array($data_bulan)) : ?>
        <tr>
          <td><?php echo $no; ?></td>
          <?php 
          $bulan = $row['tanggal'];
          $nama_bulan = $row['nama_bulan'];
          $tgl3    = date('Y', strtotime($bulan));
          ?>
          <td><?php echo $row['nama_bulan'].''.$tgl3; ?></td>
          <!-- jumlah pembayaran -->
          <?php
          $data_jumlah = mysqli_query($conn,"SELECT nama_kasir,jumlah FROM pembayaran WHERE nis_siswa='$nis_siswa' AND bulan='$bulan'");
          list($nama_kasir,$jumlah) = mysqli_fetch_array($data_jumlah);
          $jumlah = number_format($jumlah);
          ?>
          <td><?php echo $jumlah; ?> </td>
          <!-- nama kasir -->
          <td><?php echo $nama_kasir; ?></td>
          <!-- status pembayaran -->
          <td><?php echo ($jumlah >=1) ?  '<i class="fa fa-check" aria-hidden="true"><font color="blue">Lunas</font></i>' : '<em><font color="red">Nunggak</font></em>'; ?></td>
          <?php $no++ ?>
        </tr>
      <?php endwhile; ?> 

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
        <th>No</th>
        <th>Tanggal Pembayaran</th>
        <th>Jumlah Pembayaran</th>
        <th>Kasir</th>
        <th>Status Pembayaran</th>

      </tr>
    </thead>
    <tbody>
      <?php 
      $hari_ini= date('Y-m-d  h:i:s');
      $no=1;
      $thn_masuk2    = date('Y-m-d', strtotime('+2 years', strtotime($thn_masuk))); 
      $data_bulan = mysqli_query($conn,"SELECT * FROM bulan WHERE tanggal >= '$thn_masuk2' ORDER BY id limit 12");
      ?>
      <?php while($row = mysqli_fetch_array($data_bulan)) : ?>
        <tr>
          <td><?php echo $no; ?></td>
          <?php 
          $bulan = $row['tanggal'];
          $nama_bulan = $row['nama_bulan'];
          $tgl3    = date('Y', strtotime($bulan));
          ?>
          <td><?php echo $row['nama_bulan'].''.$tgl3; ?></td>
          <!-- jumlah pembayaran -->
          <?php
          $data_jumlah = mysqli_query($conn,"SELECT nama_kasir,jumlah FROM pembayaran WHERE nis_siswa='$nis_siswa' AND bulan='$bulan'");
          list($nama_kasir,$jumlah) = mysqli_fetch_array($data_jumlah);
          $jumlah = number_format($jumlah);
          ?>
          <td><?php echo $jumlah; ?> </td>
          <!-- nama kasir -->
          <td><?php echo $nama_kasir; ?></td>
          <!-- status pembayaran -->
          <td><?php echo ($jumlah >=1) ?  '<i class="fa fa-check" aria-hidden="true"><font color="blue">Lunas</font></i>' : '<em><font color="red">Nunggak</font></em>'; ?></td>
          <?php $no++ ?>
        </tr>
      <?php endwhile; ?> 

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