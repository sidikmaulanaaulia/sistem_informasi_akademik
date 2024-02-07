 <?php 
 session_start();

 if (isset($_SESSION['sukses'])) {
    $pesan_sukses = $_SESSION['sukses'];
    unset($_SESSION['sukses']); 
}

if (isset($_SESSION['password_gagal'])) {
    $password_gagal = $_SESSION['password_gagal'];
    unset($_SESSION['password_gagal']); 
}

if (isset($_SESSION['username_gagal'])) {
    $username_gagal = $_SESSION['username_gagal'];
    unset($_SESSION['username_gagal']); 
}

?>

<!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo strtoupper($nama_sekolah).' '.strtoupper($kabupaten).' '.strtoupper($provinsi); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="admin/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="admin/css/owl.carousel.css">
        <link rel="stylesheet" href="admin/css/owl.theme.css">
        <link rel="stylesheet" href="admin/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="admin/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="admincss/normalize.css">
    <!-- main CSS
        ============================================ -->
        <link rel="stylesheet" href="admin/css/main.css">
    <!-- morrisjs CSS
        ============================================ -->
        <link rel="stylesheet" href="admin/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
        <link rel="stylesheet" href="admin/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
        <link rel="stylesheet" href="admin/css/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="admin/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
        <link rel="stylesheet" href="admin/css/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="admin/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
        ============================================ -->
        <link rel="stylesheet" href="admin/css/form/all-type-forms.css">
    <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="admin/css/style.css">
    <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="admin/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        
        <div class="container-fluid">
            <div class="row main">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="text-center m-b-md custom-login text-primary">
                        <h3>PLEASE LOGIN TO APP</h3>
                    </div>
                    <div>
                        <?php if (isset($pesan_sukses)) : ?>
                         <div class="alert alert-success text-center" role="alert">
                             <?php echo $pesan_sukses; ?>
                         </div>
                     <?php endif ?> 
                 </div>
                 <div class="hpanel">
                    <div class="panel-body">
                        <form action="admin/proses-register.php" method="post">
                            <div class="form-group">
                                <div>
                                  <?php if (isset($username_gagal)) : ?>
                                      <div class="alert alert-danger" role="alert">
                                          <?php echo $username_gagal; ?>
                                      </div>
                                  <?php endif ?> 
                              </div>
                              <label class="control-label" for="username">Username</label>
                              <input type="text" placeholder="username"  title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <div>
                              <?php if (isset($password_gagal)) : ?>
                                  <div class="alert alert-danger" role="alert">
                                      <?php echo $password_gagal; ?>
                                  </div>
                              <?php endif ?> 
                          </div>
                          <label class="control-label" for="password2">Confirm Password</label>
                          <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password2" id="password2" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="email">Email</label>
                        <input type="email" title="Please enter your email" placeholder="email" required="" value="" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="np-hp">NO HP</label>
                        <input type="" title="Please enter your no hp" placeholder="no hp" required="" value="" name="no-hp" id="no-hp" class="form-control">
                    </div>
                    
                    <div class="checkbox login-checkbox">
                        <button class="btn btn-success btn-block loginbtn"  name="submit">Sign Up</button>
                        <a class="btn btn-default btn-block" href="index.php">Login</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</div>
</div>
<!-- end login -->
    <!-- jquery
        ============================================ -->
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
        <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
        <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
        <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
        <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
        <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
        <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
        <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
        <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
        <script src="js/metisMenu/metisMenu.min.js"></script>
        <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
        ============================================ -->
        <script src="js/tab.js"></script>
    <!-- icheck JS
        ============================================ -->
        <script src="js/icheck/icheck.min.js"></script>
        <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
        ============================================ -->
        <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
        <script src="js/main.js"></script>
    </body>

    </html>