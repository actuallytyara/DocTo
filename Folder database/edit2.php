<?php
include("koneksi.php");

if (isset($_POST['submit-data'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pengguna = $_POST['pengguna'];
    $email = $_POST['email'];

    // Query Update
    $result = mysqli_query($mysqli, "UPDATE tb_login SET username='$username', password='$password', pengguna='$pengguna',email='$email' WHERE id=$id");

    // Redirect kembali ke halaman admin
    header('Location: admin.php');
} else {
    die("Akses dilarang...");
}


// Periksa apakah form sudah dikirimkan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil nilai 'email' dengan aman
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    if (!empty($email)) {
        echo "email: " . htmlspecialchars($email);
    } else {
        echo "email tidak boleh kosong!";
    }
} else {
    echo "Form belum disubmit.";
}

