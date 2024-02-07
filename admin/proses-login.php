<?php 
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];

   $username = stripslashes($username);
   $password = stripslashes($password);
   $username = $conn->real_escape_string($username);
   $password = $conn->real_escape_string($password);

   // tabel user_sekolah
   $sql = "SELECT * FROM user_sekolah WHERE username='$username'";
   $result = $conn->query($sql);

   if ($result->num_rows == 1) {
      $row = mysqli_fetch_assoc($result);
      $kunci = "@43988.348";
      $password1_input = md5($password.$kunci.$password);
      $password2_input = md5($password1_input.$kunci.$password1_input);
      if ($password2_input == $row['password']) {
         include 'sessions-admin.php';
         header("location:index.php");
         exit();
      }

   }
   //tabel user_siswa
   $sql = "SELECT * FROM tabel_siswa WHERE nis_siswa='$username'";
   $result = $conn->query($sql);
   if ($result->num_rows == 1) {
      $row = mysqli_fetch_assoc($result);
      if ($password == $row['password']) {
         include 'sessions-siswa.php';
         header("location:../siswa/index.php");
         exit();
      }
   }

   // Jika username tidak ditemukan di kedua tabel
   $_SESSION['pesan_login'] = "Login gagal. Coba lagi.";
   header("Location:../index.php"); 
   exit();
}

?>
