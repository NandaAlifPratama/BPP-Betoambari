<?php
// checkUser.php

// Periksa apakah form telah dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Validasi input
    if (empty($username) || empty($password)) {
        echo "Username dan password harus diisi.";
        exit;
    }

    // Contoh data admin (sebaiknya gunakan database untuk keamanan)
    $adminUsername = 'admin';
    $adminPassword = 'admin123'; // Pastikan password sebenarnya di-hash

    // Verifikasi login
    if ($username === $adminUsername && $password === $adminPassword) {
        echo "Login berhasil. Selamat datang, Admin!";
        // Redirect ke halaman admin atau set session
        // header('Location: adminDashboard.php');
        // exit;
    } else {
        echo "Username atau password salah.";
    }
} else {
    echo "Akses tidak valid.";
}
?>