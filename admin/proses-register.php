<?php
session_start();
include 'koneksi.php';
if (isset($_POST['submit'])) {
	$username = strtolower(stripcslashes($_POST['username']));
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $password2 = mysqli_real_escape_string($conn,$_POST['password2']);
  $email = mysqli_real_escape_string($conn,$_POST['password']);
  $no_hp = mysqli_real_escape_string($conn,$_POST['no-hp']);

  $result = mysqli_query($conn,"SELECT username FROM user_sekolah WHERE username='$username'");
  if (mysqli_fetch_assoc($result) === false) {

    if ($password ===  $password2) {
     $sql = "INSERT INTO user_sekolah (id, username, password,email,no_hp) VALUES ('', '$username', '$password','$email','$no_hp');";
     $result = mysqli_query($conn,$sql);
     echo $_SESSION['sukses'] = "berhasil memasukan data";
     header('location:../register.php');
     exit();

   }else{
     echo $_SESSION['password_gagal'] = "Password Gagal";
     header('location:../register.php');
     exit();
   }
 }else{
   echo $_SESSION['username_gagal'] = "username Gagal";
   header('location:../register.php');
   exit();
 }

}

?>