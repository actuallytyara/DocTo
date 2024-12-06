<?php
session_start();
ob_start(); // Menangani output sebelum header

include "koneksi.php";

// Ambil data dari form login
$username = mysqli_real_escape_string($mysqli, $_POST['Username']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);

// Query dengan prepared statement
$query = $mysqli->prepare("SELECT * FROM tb_login WHERE username = ?");
$query->bind_param("s", $username);
$query->execute();
$result = $query->get_result();

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();

    // Verifikasi password
    if (password_verify($password, $data['password'])) {
        // Login berhasil, cek pengguna
        $_SESSION['username'] = $username;
        $_SESSION['pengguna'] = $data['pengguna'];

        if ($data['pengguna'] == "user") {
            header("location:user.php");
            exit; // Menghentikan eksekusi setelah redirect
        } elseif ($data['pengguna'] == "admin") {
            header("location:admin.php");
            exit; // Menghentikan eksekusi setelah redirect
        } else {
            // pengguna tidak dikenal
            header("location:index.php?pesan=unknown_pengguna");
            exit;
        }
    } else {
        // Password salah
        header("location:index.php?pesan=wrong_password");
        exit;
    }
} else {
    // Username tidak ditemukan
    header("location:index.php?pesan=not_found");
    exit;
}