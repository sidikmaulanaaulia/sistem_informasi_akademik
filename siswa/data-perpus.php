<?php 
include 'header.php';
$id_siswa = $_SESSION['id_siswa'];
$nis_siswa = $_SESSION['nis_siswa'];
$thn_masuk = $_SESSION['tahun_masuk'];
$nama_siswa = $_SESSION['nama_siswa'];
?>


<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper mt-3 bg-white">
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <!-- start welcome -->
     <h3 class="text-center mt-3">Perpustakaan <?php echo $nama_siswa; ?></h3>
  <!-- end welcome -->
  <!-- Tabs -->
  <div class="card mt-3">
    <!-- Nav tabs -->
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tahun I</button>
      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Tahun II</button>
      <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Tahun III</button>
      <button class="btn btn-danger nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#denda" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Denda</button>
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
              <th>Bulan</th>
              <th>Judul</th>
              <th>Penerbit</th>
              <th>Tanggal Peminjaman</th>
              <th>Tanggal pemgembalian</th>
              <th>Status</th>

            </tr>
          </thead>
          <tbody>
           <?php 
           $nis_siswa = $_SESSION['nis_siswa'];
           $thn_masuk = $_SESSION['tahun_masuk'];
           $hari_ini = date('Y-m-d h:i:s');
           $no = 1;
           $tgl2 = date('Y-m-d', strtotime($thn_masuk)); 
           $data = mysqli_query($conn, "SELECT * FROM bulan WHERE tanggal >= '$thn_masuk' ORDER BY id LIMIT 12;");

           while ($d = mysqli_fetch_array($data)) {
            $bulan = $d['tanggal'];
            $tgl3 = date('Y', strtotime($bulan));

            $data_peminjaman = mysqli_query($conn, "SELECT tanggal_peminjaman, tanggal_pengembalian, book_id FROM peminjaman WHERE tanggal='$bulan' AND nis_siswa='$nis_siswa'");
            list($tanggal_peminjaman, $tanggal_pengembalian, $book_id) = mysqli_fetch_array($data_peminjaman);

            $data_buku = mysqli_query($conn, "SELECT judul_buku, penerbit FROM buku WHERE book_id='$book_id'");
            list($judul, $penerbit) = mysqli_fetch_array($data_buku);
            ?>
            <tr>
              <!-- no -->
              <td><?php echo $no++; ?></td>
              <!-- nama bulan -->
              <td><?php echo $d['nama_bulan'] . ' ' . $tgl3 ?></td>
              <!-- data penerbit dan data judul from buku -->
              <td><?php echo $judul; ?></td>
              <td><?php echo $penerbit; ?></td>
              <td><?php echo $tanggal_peminjaman; ?></td>
              <!-- nama kasir -->
              <td><?php echo $tanggal_pengembalian; ?></td>
              <!-- status -->
               <td>
              <?php echo ($judul >= 1) ? '<i class="fa fa-check" aria-hidden="true"><font color="blue">Sukses</font></i>' : '<em><font color="red">Belum Ada</font></em>'; ?>
            </td>
            </tr>
          <?php } // end of outer while loop ?>

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
          <th>Bulan</th>
          <th>Judul</th>
          <th>Penerbit</th>
          <th>Tanggal Peminjaman</th>
          <th>Tanggal Pengembalian</th>
          <th>Status</th>

        </tr>
      </thead>
      <tbody>
        <?php 
        $hari_ini = date('Y-m-d h:i:s');
        $nis_siswa = $_SESSION['nis_siswa'];
        $thn_masuk = $_SESSION['tahun_masuk'];
        $no = 1;
        $thn_masuk2 = date('Y-m-d', strtotime('+1 years', strtotime($thn_masuk))); 
        $data = mysqli_query($conn, "SELECT * FROM bulan WHERE tanggal >= '$thn_masuk2' ORDER BY id LIMIT 12;");

        while ($d = mysqli_fetch_array($data)) {
          $bulan = $d['tanggal'];
          $tgl3 = date('Y', strtotime($bulan));

          $data_peminjaman = mysqli_query($conn, "SELECT tanggal_peminjaman, tanggal_pengembalian, book_id FROM peminjaman WHERE tanggal='$bulan' AND nis_siswa='$nis_siswa'");
          list($tanggal_peminjaman, $tanggal_pengembalian, $book_id) = mysqli_fetch_array($data_peminjaman);

          $data_buku = mysqli_query($conn, "SELECT judul_buku, penerbit FROM buku WHERE book_id='$book_id'");
          list($judul, $penerbit) = mysqli_fetch_array($data_buku);
          ?>
          <tr>
            <!-- no -->
            <td><?php echo $no++; ?></td>
            <!-- nama bulan -->
            <td><?php echo $d['nama_bulan'] . ' ' . $tgl3 ?></td>
            <!-- data penerbit dan data judul from buku -->
            <td><?php echo $judul; ?></td>
            <td><?php echo $penerbit; ?></td>
            <td><?php echo $tanggal_peminjaman; ?></td>
            <!-- nama kasir -->
            <td><?php echo $tanggal_pengembalian; ?></td>
            <!-- status -->
            <td>
              <?php echo ($judul >= 1) ? '<i class="fa fa-check" aria-hidden="true"><font color="blue">Sukses</font></i>' : '<em><font color="red">Belum Ada</font></em>'; ?>
            </td>
          </tr>
        <?php } // end of outer while loop ?>



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
        <th>Bulan</th>
        <th>Judul</th>
        <th>Penerbit</th>
        <th>Tanggal Peminjaman</th>
        <th>Tanggal pengembalian</th>
        <th>Status</th>

      </tr>
    </thead>
    <tbody>
      <?php 
      $hari_ini = date('Y-m-d h:i:s');
      $nis_siswa = $_SESSION['nis_siswa'];
      $thn_masuk = $_SESSION['tahun_masuk'];
      $no = 1;
      $thn_masuk3    = date('Y-m-d', strtotime('+2 years', strtotime($thn_masuk)));  
      $data = mysqli_query($conn, "SELECT * FROM bulan WHERE tanggal >= '$thn_masuk3' ORDER BY id LIMIT 12;");

      while ($d = mysqli_fetch_array($data)) {
        $bulan = $d['tanggal'];
        $tgl3 = date('Y', strtotime($bulan));

        $data_peminjaman = mysqli_query($conn, "SELECT tanggal_peminjaman, tanggal_pengembalian, book_id FROM peminjaman WHERE tanggal='$bulan' AND nis_siswa='$nis_siswa'");
        list($tanggal_peminjaman, $tanggal_pengembalian, $book_id) = mysqli_fetch_array($data_peminjaman);

        $data_buku = mysqli_query($conn, "SELECT judul_buku, penerbit FROM buku WHERE book_id='$book_id'");
        list($judul, $penerbit) = mysqli_fetch_array($data_buku);
        ?>
        <tr>
          <!-- no -->
          <td><?php echo $no++; ?></td>
          <!-- nama bulan -->
          <td><?php echo $d['nama_bulan'] . ' ' . $tgl3 ?></td>
          <!-- data penerbit dan data judul from buku -->
          <td><?php echo $judul; ?></td>
          <td><?php echo $penerbit; ?></td>
          <td><?php echo $tanggal_peminjaman; ?></td>
          <!-- nama kasir -->
          <td><?php echo $tanggal_pengembalian; ?></td>
          <!-- status -->
          <td>
            <?php echo ($judul >= 1) ? '<i class="fa fa-check" aria-hidden="true"><font color="blue">Sukses</font></i>' : '<em><font color="red">Belum Ada</font></em>'; ?>
          </td>
        </tr>
      <?php } // end of outer while loop ?>



    </tbody>
  </table>
</div>
</div>
<div class="tab-pane fade" id="denda" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
  <div class="table-responsive">
    <h1 class="text-center mt-3">Belum ada denda</h1>
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
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
</body>
</html>