<?php
session_start(); // Mulai sesi

// Fungsi untuk mengarahkan pengguna ke halaman utama dengan pesan kesalahan
function redirectToHomePageWithError($message) {
    $_SESSION['error_message'] = $message;
    header('location: ../index.php');
    exit;
}

// Periksa apakah sesi pengguna atau sesi siswa telah diatur
if (isset($_SESSION['username'])) {
    // Pengguna sudah masuk
    // Lakukan tindakan yang sesuai untuk pengguna
} elseif (isset($_SESSION['username_siswa'])) {
    // Siswa sudah masuk
    // Lakukan tindakan yang sesuai untuk siswa
} else {
    // Tidak ada sesi aktif
    // Arahkan pengguna ke halaman utama dengan pesan kesalahan
    redirectToHomePageWithError("Silakan masuk terlebih dahulu untuk mengakses halaman ini.");
}
?>
