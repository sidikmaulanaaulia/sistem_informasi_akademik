 <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <!-- Batas didini kopi untuk menu utama-->
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="index.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-home"></i
                  ><span class="hide-menu">MENU UTAMA</span></a
                >              </li>
                <!--batas akhir menu utama-->
                
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-siswa.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-multiple"></i
                  ><span class="hide-menu">Data Siswa</span></a
                >              </li>

              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-guru.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-multiple"></i
                  ><span class="hide-menu">Data Guru</span></a
                >              </li>

                <?php if(($_SESSION['guru']) == '01' ){ ?>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-kelas.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-card-details"></i
                  ><span class="hide-menu">Kelas</span></a
                >              </li>
                 <?php } ?>
                
                
                 <?php if(($_SESSION['adminperpus']) == '01' ){ ?>
                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="data-buku-perpus.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-line"></i
                                    ><span class="hide-menu">Perpus</span></a
                >              </li>
                  <?php } ?>  

                   <?php if(($_SESSION['adminperpus']) == '01' ){ ?>
                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="data-peminjaman-perpus.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-line"></i
                                    ><span class="hide-menu">Peminjaman Perpus</span></a
                >              </li>
                  <?php } ?>

                   <?php if(($_SESSION['adminbk']) == '01' ){ ?>
                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="data-pelanggaran.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-alert"></i
                                    ><span class="hide-menu">Pelanggaran</span></a
                >              </li>
                  <?php } ?>

                <?php if(($_SESSION['adminspp']) == '01' ){ ?>
                  <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="data-pembayaran.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-areaspline"></i
                                    ><span class="hide-menu">Spp</span></a
                >              </li>
                <?php } ?>

                <?php if(($_SESSION['adminspp']) == '01' ){ ?>
                  <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="data-absensi.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-clipboard-account"></i
                                    ><span class="hide-menu">Absen Siswa</span></a
                >              </li>
                <?php } ?> 
                <?php if(($_SESSION['adminspp']) == '01' ){ ?>
                  <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="data-mata-pelajaran.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-bulletin-board"></i
                                    ><span class="hide-menu">Mata Pelajaran</span></a
                >              </li>
                <?php } ?>

                 <?php if(($_SESSION['guru']) == '01' ){ ?>
                  <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="data-absensi-guru.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-clipboard-account"></i
                                    ><span class="hide-menu">Absen Guru</span></a
                >              </li>
                <?php } ?>

                <?php if(($_SESSION['guru']) == '01' ){ ?>
                  <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="data-nilai-siswa.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-histogram"></i
                                    ><span class="hide-menu">Nilai Siswa</span></a
                >              </li>
                <?php } ?>

                <?php if(($_SESSION['guru']) == '01' ){ ?>
                  <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="laporan-siswa.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-alert"></i
                                    ><span class="hide-menu">Laporan Siswa</span></a
                >              </li>
                <?php } ?>
                <!--menu vistual class -->
                <?php if( ($_SESSION['posisi']) == '01' ){ ?>

                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="index.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-airplay"></i
                  ><span class="hide-menu">VIRTUAL CLASS</span></a
                >              </li>
              <?php } ?>

               <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-key"></i
                  ><span class="hide-menu">Settings</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="authentication-login.html" class="sidebar-link"
                      ><i class="mdi mdi-account"></i
                      ><span class="hide-menu">Profile</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="logout.php" class="sidebar-link"
                      ><i class="fa fa-power-off me-1 ms-1"></i
                      ><span class="hide-menu">Logout</span></a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </nav>

          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>