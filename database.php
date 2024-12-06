<?php
$host = 'localhost';
$user = 'root';
$password = '';
$health_articles = 'health_articles';

// Koneksi ke database
$conn = new mysqli($host, $user, $password, $health_articles);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query artikel (contoh)
function fetchArticles($conn) {
    $query = "SELECT title, description, link FROM articles";
    $result = $conn->query($query);
    $articles = [];
    while ($row = $result->fetch_assoc()) {
        $articles[] = $row;
    }
    return $articles;
}

// Query katalog obat (contoh)
function fetchCatalog($conn) {
    $query = "SELECT name, description, link FROM catalog";
    $result = $conn->query($query);
    $catalog = [];
    while ($row = $result->fetch_assoc()) {
        $catalog[] = $row;
    }
    return $catalog;
}
?>