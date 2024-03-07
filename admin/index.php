<?php
include 'header.php';
if (isset($_SESSION['username'])) {
  $nama = $_SESSION['username'];
}


$data_siswa = mysqli_query($conn,"SELECT * FROM tabel_siswa");
$jumlah_siswa = mysqli_num_rows($data_siswa);

$data_guru = mysqli_query($conn,"SELECT * FROM tabel_guru");
$jumlah_guru = mysqli_num_rows($data_guru);

$data_kelas = mysqli_query($conn,"SELECT * FROM tabel_kelas");
$jumlah_kelas = mysqli_num_rows($data_kelas);

$data_pelanggaran = mysqli_query($conn,"SELECT * FROM tabel_pelanggaran");
$jumlah_pelanggaran = mysqli_num_rows($data_pelanggaran);

$data_pembayaran = mysqli_query($conn,"SELECT * FROM pembayaran");
$jumlah_pembayaran = mysqli_num_rows($data_pembayaran);



?>
    <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper bg-white">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
           <?php if (isset($_SESSION['nama'])) : ?>
              <h4 class="page-title">
                  selamat datang <?php echo $nama; ?>
             </h4>
           <?php endif; ?>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-cyan text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-view-dashboard"></i>                  </h1>
                  <h6 class="text-white">Data Siswa</h6>
                  <h6 class="text-white"><?php echo $jumlah_siswa; ?></h6>
                </div>
              </div>
            </div> 

            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-cyan text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-view-dashboard"></i>                  </h1>
                  <h6 class="text-white">Data Guru</h6>
                  <h6 class="text-white"><?php echo $jumlah_guru; ?></h6>
                </div>
              </div>
            </div>

             <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-cyan text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-view-dashboard"></i>                  </h1>
                  <h6 class="text-white">Data Kelas</h6>
                  <h6 class="text-white"><?php echo $jumlah_kelas; ?></h6>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-collage"></i>                  </h1>
                  <h6 class="text-white">Data Bk</h6>
                  <h6 class="text-white"><?php echo $jumlah_pelanggaran; ?></h6>
                </div>
              </div>
            </div>
          
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-alert"></i>                  </h1>
                  <h6 class="text-white">Data Spp</h6>
                  <h6 class="text-white"><?php echo $jumlah_pembayaran;; ?></h6>
                </div>
              </div>
            </div> 

             <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-alert"></i>                  </h1>
                  <h6 class="text-white">Data Pelanggaran</h6>
                  <h6 class="text-white"><?php echo $jumlah_pelanggaran; ?></h6>
                </div>
              </div>
            </div>

            <!-- Column -->
          </div>
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- End footer -->
      </div>
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
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="assets/libs/flot/excanvas.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>
  </body>
</html>
