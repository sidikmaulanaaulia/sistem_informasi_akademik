<?php 
session_start();
include 'info.php';
if (isset($_SESSION['pesan_login'])) {
  $pesan_login = $_SESSION['pesan_login'];
  unset($_SESSION['pesan_login']); 
}

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo strtoupper($nama_sekolah).' '.strtoupper($kabupaten).' '.strtoupper($provinsi); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style type="">
   body {
  position: relative;
  overflow: hidden;
}

body::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 70vh;
  background: linear-gradient(-45deg, green, cyan); /* Sesuaikan warna latar belakang */
  transform-origin: 0 0;
  transform: skewY(-17deg); /* Sesuaikan derajat miring */
  z-index: -1;
}

  </style>
</head>
<body>
  <form action="admin/proses-login.php" method="post">
   <div>
    <?php if (isset($pesan_login)) : ?>
     <div class="alert alert-danger text-center" role="alert">
       <?php echo $pesan_login; ?>
     </div>
   <?php endif ?> 
 </div>
 <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6 ">
        <div class="d-flex justify-content-center"> 
        <img src="admin/assets/images/logo-sekolah.png"
        class="img-fluid" width="250" height="380" alt="Phone image">
        </div>
        <h1 class="text-center fw-bold">Sistem informasi Akademik </h1>
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" name="username" id="form1Example13" class="form-control form-control-lg" required />
            <label class="form-label" for="form1Example13">Username </label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" required />
            <label class="form-label" for="form1Example23">Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Login</button>
          <button  class="btn btn-outline-success btn-lg btn-block" name="submit"><a class="text-black text-decoration-none" href="register.php">Register</a></button>
       
      </div>
    </div>
  </div>
</section>
 </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>