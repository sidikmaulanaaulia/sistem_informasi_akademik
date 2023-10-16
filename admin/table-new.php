<?php
include 'kepala.php'; ?>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Tables</h4>
        <div class="ms-auto text-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Library
              </li>
            </ol>
          </nav>
        </div>
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
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">TABLE DATA GURU</h5>
        <div class="table-responsive">
          <table
          
          class="table table-striped table-bordered"
          >
          <thead>
            <tr>
              
              <th>Nama</th>
              <th>Tanggal Lahir</th>
              <th>Alamat</th>
              <th>Jenis kelamin</th>
              <th>Agama</th>
              <th>No Hp</th>
              <th>Pendidikan</tha>
              <th>Guru Mata Pelajaran</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            include 'koneksi.php';
            $query = "SELECT * FROM tabel_guru";
            $result = mysqli_query($conn, $query);

            while ($tampil = mysqli_fetch_assoc($result)) {
              echo "
              <tr>
              
              <td>$tampil[nama]</td>
              <td>$tampil[tanggal_lahir];</td>
              <td>$tampil[alamat]</td>
              <td>$tampil[jenis_kelamin]</td>
              <td>$tampil[agama]</td>
              <td>$tampil[no_telepone]</td>
              <td>$tampil[pendidikan]</td>
              <td>$tampil[guru_mata_pelajaran]</td>
              </tr>
              ";

            }
            ?>                        
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- akhir table guru -->

  <!-- start table siwa -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center">TABLE SISWA</h5>
      <div class="table-responsive">
        <table
        
        class="table table-striped table-bordered"
        >
        <thead>
          <tr>
            
            <th>Nis</th>
            <th>Nisn</th>
            <th>Nama Siswa</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Tmpat Lahir</th>
            <th>Agama</tha>
            <th>Asal Sekolah</th>
            <th>Jarak Tempuh </th>
            <th>Nama Orangtua</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          include 'koneksi.php';
          $query = "SELECT * FROM tabel_siswa";
          $result = mysqli_query($conn, $query);

          while ($tampil = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
            
            <td>$tampil[nis]</td>
            <td>$tampil[nisn]</td>
            <td>$tampil[nama_siswa]</td>
            <td>$tampil[alamat]</td>
            <td>$tampil[tgl_lahir]</td>
            <td>$tampil[tempat_lahir]</td>
            <td>$tampil[agama]</td>
            <td>$tampil[asal_sekolah]</td>
            <td>$tampil[jarak_tempuh]</td>
            <td>$tampil[nama_ortu]</td>
            </tr>
            ";

          }
          ?>                        
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- akhir -->
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">TABLE GURU BK</h5>
    <div class="table-responsive">
      <table
      
      class="table table-striped table-bordered"
      >
      <thead>
        <tr>
          
          <th>NIB</th>
          <th>Nama</th>
          <th>Tugas Utamma</th>
          <th>Bidang Konseling</th>
          <th>Kontak</th>
          <th>Tanggal Kesedian</th>
          
        </tr>
      </thead>
      <tbody>
        <?php 
        include 'koneksi.php';
        $query = "SELECT * FROM tabel_guru_bk";
        $result = mysqli_query($conn, $query);

        while ($tampil = mysqli_fetch_assoc($result)) {
          echo "
          <tr>
          
          <td>$tampil[nomor_identifikasi_bk]</td>
          <td>$tampil[nama_guru_bk]</td>
          <td>$tampil[tugas_utama]</td>
          <td>$tampil[bidang_konseling]</td>
          <td>$tampil[kontak]</td>
          <td>$tampil[tanggal_kesediaan]</td>
          </tr>
          ";

        }
        ?>                        
      </tbody>
    </table>
  </div>
</div>
</div>

<!-- akhir guru bk-->
<!-- satrt pegawai-->
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">TABLE PEGAWAI</h5>
    <div class="table-responsive">
      <table
      
      class="table table-striped table-bordered"
      >
      <thead>
        <tr>
          
          <th>Nama</th>
          <th>Alamat</th>
          <th>Nomor Hp</th>
          <th>Agama</th>
          <th>Tanggal Lahir</th>
          <th>Pengalaman Kerja</th>
          <th>Prestasi</tha>
          <th>Jabatan</th>
          <th>Pendidikan</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        include 'koneksi.php';
        $query = "SELECT * FROM tabel_pegawai";
        $result = mysqli_query($conn, $query);

        while ($tampil = mysqli_fetch_assoc($result)) {
          echo "
          <tr>
          
          <td>$tampil[nama_lengkap]</td>
          <td>$tampil[alamat]</td>
          <td>$tampil[nomor_telephone]</td>
          <td>$tampil[agama]</td>
          <td>$tampil[tgl_lahir]</td>
          <td>$tampil[pengalaman_kerja]</td>
          <td>$tampil[prestasi_penghargaan]</td>
          <td>$tampil[jabatan]</td>
          <td>$tampil[pendidikan]</td>
          </tr>
          ";

        }
        ?>                        
      </tbody>
    </table>
  </div>
</div>
</div>
<!-- akhir table pegawai -->
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">TABLE SEKOLAH</h5>
    <div class="table-responsive">
      <table
      
      class="table table-striped table-bordered"
      >
      <thead>
        <tr>
          
          <th>Kode</th>
          <th>Nama Sekolah</th>
          <th>Alamat</th>
          <th>Nama Kepala Sekolah</th>
          <th>Nama Direktur</th>
          <th>Email</th>
          <th>NO HP</tha>
          <th>Provinsi</th>
          <th>Kabupaten</th>
          <th>Kecamatan</th>
          <th>Desa</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        include 'koneksi.php';
        $query = "SELECT * FROM table_sekolah";
        $result = mysqli_query($conn, $query);

        while ($tampil = mysqli_fetch_assoc($result)) {
          echo "
          <tr>
          
          <td>$tampil[kode]</td>
          <td>$tampil[nama_sekolah]</td>
          <td>$tampil[alamat]</td>
          <td>$tampil[nama_kepsek]</td>
          <td>$tampil[nama_direktur]</td>
          <td>$tampil[email]</td>
          <td>$tampil[no_hp]</td>
          <td>$tampil[provinsi]</td>
          <td>$tampil[kabupaten]</td>
          <td>$tampil[kecamatan]</td>
          <td>$tampil[desa]</td>
          </tr>
          ";

        }
        ?>                        
      </tbody>
    </table>
  </div>
</div>
</div>
<!-- akhir table sekolah -->
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">TABLE KELAS</h5>
    <div class="table-responsive">
      <table
      
      class="table table-striped table-bordered"
      >
      <thead>
        <tr>
          
          <th>No kelas</th>
          <th>Nama Kelas</th>
          <th>Tingkat</th>
          <th>Wali Kelas</th>
          <th>Jumlah Siswa</th>
          
        </tr>
      </thead>
      <tbody>
        <?php 
        include 'koneksi.php';
        $query = "SELECT * FROM tabel_kelas";
        $result = mysqli_query($conn, $query);

        while ($tampil = mysqli_fetch_assoc($result)) {
          echo "
          <tr>
          
          <td>$tampil[nomor_kelas]</td>
          <td>$tampil[nama_kelas]</td>
          <td>$tampil[tingkat]</td>
          <td>$tampil[wali_kelas]</td>
          <td>$tampil[jumlah_siswa]</td>
          
          </tr>
          ";

        }
        ?>                        
      </tbody>
    </table>
  </div>
</div>
</div>
<!-- akhir kelas -->
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">TABLE PELANGGARAN</h5>
    <div class="table-responsive">
      <table
      
      class="table table-striped table-bordered"
      >
      <thead>
        <tr>
          
          <th>Nama</th>
          <th>Tanggal Pelanggaran</th>
          <th>Kategory Pelanggaran</th>
          <th>Deskripsi Pelanggaran</th>
          <th>Konsekuensi</th>
          <th>Tindakan korektif</th>
          
        </tr>
      </thead>
      <tbody>
        <?php 
        include 'koneksi.php';
        $query = "SELECT * FROM tabel_pelanggaran";
        $result = mysqli_query($conn, $query);

        while ($tampil = mysqli_fetch_assoc($result)) {
          echo "
          <tr>
          
          <td>$tampil[nama]</td>
          <td>$tampil[tanggal_pelanggaran]</td>
          <td>$tampil[kategori_pelanggaran]</td>
          <td>$tampil[deskripsi_pelanggaran]</td>
          <td>$tampil[konsekuensi]</td>
          <td>$tampil[tindakan_korektif]</td>
          
          </tr>
          ";

        }
        ?>                        
      </tbody>
    </table>
  </div>
</div>
</div>
<!-- akhir pelanggaran-->
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">TABLE PRESTASI</h5>
    <div class="table-responsive">
      <table
      
      class="table table-striped table-bordered"
      >
      <thead>
        <tr>
          
          <th>Nama Siswa</th>
          <th>Studi</th>
          <th>Tanggal Prestasi</th>
          <th>Deskripsi Prestasi</th>
          <th>Kategory Prestasi</th>
          <th>Dampak Prestasi</th>
          <th>Penghargaan</th>
          
        </tr>
      </thead>
      <tbody>
        <?php 
        include 'koneksi.php';
        $query = "SELECT * FROM tabel_prestasi";
        $result = mysqli_query($conn, $query);

        while ($tampil = mysqli_fetch_assoc($result)) {
          echo "
          <tr>
          
          <td>$tampil[nama_siswa]</td>
          <td>$tampil[studi]</td>
          <td>$tampil[tanggal_prestasi]</td>
          <td>$tampil[deskripsi_prestasi]</td>
          <td>$tampil[kategori_prestasi]</td>
          <td>$tampil[dampak_prestasi]</td>
          <td>$tampil[penghargaan]</td>
          
          </tr>
          ";

        }
        ?>                        
      </tbody>
    </table>
  </div>
</div>
</div>
<!-- akhir prestasi -->
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">TABLE CATATAN GURU</h5>
    <div class="table-responsive">
      <table
      
      class="table table-striped table-bordered"
      >
      <thead>
        <tr>
          
          <th>Nama Siswa</th>
          <th>Tanggal</th>
          <th>Aktivitas Siswa</th>
          <th>Komentar Guru</th>
          
          
        </tr>
      </thead>
      <tbody>
        <?php 
        include 'koneksi.php';
        $query = "SELECT * FROM tabel_catatan_guru";
        $result = mysqli_query($conn, $query);

        while ($tampil = mysqli_fetch_assoc($result)) {
          echo "
          <tr>
          
          <td>$tampil[nama_siswa]</td>
          <td>$tampil[tanggal]</td>
          <td>$tampil[aktivitas_siswa]</td>
          <td>$tampil[komentar_guru]</td>
          </tr>
          ";

        }
        ?>                        
      </tbody>
    </table>
  </div>
</div>
</div>
<!-- akhir catatan guru -->
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">TABLE PEMBAYARAN</h5>
    <div class="table-responsive">
      <table
      
      class="table table-striped table-bordered"
      >
      <thead>
        <tr>
          
          <th>No Pembayaran</th>
          <th>Nama Siswa</th>
          <th>Tanggal Pembayaran</th>
          <th>Deskripsi Pembayaran</th>
          <th>Jumlah Pembayaran</th>
          <th>Metode Pembayaran</th>
          <th>Status Pembayaran</th>
          
        </tr>
      </thead>
      <tbody>
        <?php 
        include 'koneksi.php';
        $query = "SELECT * FROM tabel_pembayaran_uang_sekolah";
        $result = mysqli_query($conn, $query);

        while ($tampil = mysqli_fetch_assoc($result)) {
          echo "
          <tr>
          
          <td>$tampil[nomor_pembayaran]</td>
          <td>$tampil[nama_siswa]</td>
          <td>$tampil[tanggal_pembayaran]</td>
          <td>$tampil[deskripsi_pembayaran]</td>
          <td>$tampil[jumlah_pembayaran]</td>
          <td>$tampil[metode_pembayaran]</td>
          <td>$tampil[status_pembayaran]</td>
          
          </tr>
          ";

        }
        ?>                        
      </tbody>
    </table>
  </div>
</div>
</div>
<!-- akhir pembayaran uang sekolah -->
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">TABLE USERNAME GURU</h5>
    <div class="table-responsive">
      <table
      
      class="table table-striped table-bordered"
      >
      <thead>
        <tr>
          
          <th>Nama Guru</th>
          <th>NIG</th>
          <th>Username</th>
          <th>Password</th>
          <th>Tanggal Pembuatan Akun</th>
          <th>Status Akun</th>
          
        </tr>
      </thead>
      <tbody>
        <?php 
        include 'koneksi.php';
        $query = "SELECT * FROM tabel_username_guru";
        $result = mysqli_query($conn, $query);

        while ($tampil = mysqli_fetch_assoc($result)) {
          echo "
          <tr>
          
          <td>$tampil[nama_guru]</td>
          <td>$tampil[nomor_identifikasi_guru]</td>
          <td>$tampil[username]</td>
          <td>$tampil[password]</td>
          <td>$tampil[tanggal_pembuatan_akun]</td>
          <td>$tampil[status_akun]</td>
          
          </tr>
          ";

        }
        ?>                        
      </tbody>
    </table>
  </div>
</div>
</div>
<!-- akhir user login -->
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">TABLE ABSENSI GURU</h5>
    <div class="table-responsive">
      <table
      
      class="table table-striped table-bordered"
      >
      <thead>
        <tr>
          
          <th>Nama Guru</th>
          <th>NIG</th>
          <th>Tanggal</th>
          <th>Jam Masuk</th>
          <th>Jam Keluar</th>
          <th>Durasi Kerja</th>
          
        </tr>
      </thead>
      <tbody>
        <?php 
        include 'koneksi.php';
        $query = "SELECT * FROM tabel_absensi_guru";
        $result = mysqli_query($conn, $query);

        while ($tampil = mysqli_fetch_assoc($result)) {
          echo "
          
          <tr>
          
          <td>$tampil[nama_guru]</td>
          <td>$tampil[no_identifikasi_guru]</td>
          <td>$tampil[tanggal]</td>
          <td>$tampil[jam_masuk]</td>
          <td>$tampil[jam_keluar]</td>
          <td>$tampil[durasi_kerja]</td>
          
          </tr>
          ";

        }
        ?>                        
      </tbody>
    </table>
  </div>
</div>
</div>
<!-- akhir user login -->


</div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center">
  All Rights Reserved by Matrix-admin. Designed and Developed by
  <a href="https://www.wrappixel.com">WrapPixel</a>.
</footer>
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
