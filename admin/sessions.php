<?php
session_start(); // Mulai sesi
if(isset($_SESSION['username']) == false){
    header('location:../index.php');
}
?>
