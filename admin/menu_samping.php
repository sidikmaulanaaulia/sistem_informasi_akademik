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

                <?php if(($_SESSION['adminspp']) == '01' ){ ?>
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
                  href="widgets.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-line"></i
                                    ><span class="hide-menu">Perpus</span></a
                >              </li>
                  <?php } ?>

                   <?php if(($_SESSION['adminbk']) == '01' ){ ?>
                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="../siswa/ data-buku-perpus.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-format-line-weight"></i
                                    ><span class="hide-menu">Perpus</span></a
                >              </li>
                  <?php } ?>



                <?php if(($_SESSION['adminsatpam']) == '01' ){ ?>
                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="widgets.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-clipboard-account"></i
                                    ><span class="hide-menu">Data Satpam</span></a
                >              </li>
                <?php } ?>
                <!--menu vistual class -->
                <?php if( ($_SESSION['posisi']) == 'guru' ){ ?>

                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="index.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-airplay"></i
                  ><span class="hide-menu">VIRTUAL CLASS</span></a
                >              </li>
              <?php } ?>
                <!--akhir menu vistual class -->
                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="widgets.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-airplay"></i
                                    ><span class="hide-menu">Peserta Kelas </span></a
                >              </li>
                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="widgets.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-folder-plus"></i
                                    ><span class="hide-menu">Kantong Tugas /</span></a
                >              </li>
                
                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="widgets.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-star-variant"></i
                                    ><span class="hide-menu">Bimbingan Akademik</span></a
                >              </li>
                
                <!--menu form pengajuan -->
                <li class="sidebar-item ">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="index.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">FORM PENGAJUAN</span></a
                >              </li>
                <!--akhir mmenu vistual class -->
                
                <li class="sidebar-item">
                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="widgets.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-box-outline"></i
                                    ><span class="hide-menu">Beasiswa</span></a
                >              </li>
                
                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="widgets.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-star-variant"></i
                                    ><span class="hide-menu">Prestasi</span></a
                >              </li>
                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="widgets.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-calendar"></i
                                    ><span class="hide-menu">Cuti Akademik</span></a
                >              </li>
              
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="widgets.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-book-variant"></i
                                    ><span class="hide-menu">SP Regular # SP Khusus</span></a
                >              </li>
              
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="widgets.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-worker"></i
                                    ><span class="hide-menu">Praktek Kerja Lapangan</span></a
                >              </li>
              
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="widgets.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-folder-multiple"></i
                                    ><span class="hide-menu">Program MKMB</span></a
                >              </li>
              
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="widgets.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-book-multiple"></i
                                    ><span class="hide-menu">Proposal & Tugas Akhir</span></a
                >              </li>
                
                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="widgets.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-wallet-travel"></i
                                    ><span class="hide-menu">Akses Turnitin</span></a
                >              </li>
                
                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="widgets.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-contact-mail"></i
                                    ><span class="hide-menu">Surat Keterangan</span></a
                >              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>