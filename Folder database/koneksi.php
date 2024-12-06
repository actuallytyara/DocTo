<?php
$databasehost = "localhost";
$login = "login";
$username = "root";
$password = "";
$mysqli = mysqli_connect ($databasehost, $username, $password, $login );
// $host mysqli_connect("localhost","root","");

if ($mysqli) {
    //   echo "koneksi db berhasil.<br/>";
} else {
    echo "koneksi gagal.<br/>";
}
