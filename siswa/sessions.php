<?php
session_start(); // Mulai sesi
if(isset($_SESSION['nis_siswa']) == false){
    header('location:../index.php');
}
?>
