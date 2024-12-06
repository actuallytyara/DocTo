<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <link rel="stylesheet" href="stylewebreg2.css">
</head>

<body>
    <div class="container">
        <div class="kotak_register">
            <h1>Register</h1>
            <form action="Register.php" method="post" name="form1">
                <table>

                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" placeholder="Isi Username anda" required></td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td><input type="Password" name="password" placeholder="Isi Password anda" required></td>
                    </tr>
                    
                    <tr>
                        <td>Pengguna</td>
                        <td>
                            <select name="pengguna" id="pengguna" required>
                                <option disabled selected> Pilih </option>>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td><input type="text" name="email" placeholder="Isi email anda" required></td>
                    </tr>
                    <tr>
                        <td><button class="tombol_login" name="submit"> Daftar</button></td>
                    </tr>

                </table>
                <?php
                if (isset($_POST['submit'])) {
                    $usernames = $_POST['username'];
                    $passwords = $_POST['password'];
                    $penggunas = $_POST['pengguna'];
                    $emails = $_POST['email'];



                    //echo($judul);
                    // include database connection file
                
                    
                    // Include_once("koneksi.php");
                    include "koneksi.php";
                    $query_mysqli = mysqli_query($mysqli, "SELECT * FROM tb_login ") or die(mysqli_error(die));

                    // Insert user data into table
                    $result = mysqli_query($mysqli, "INSERT INTO tb_login (username,password,pengguna,email) 
                    VALUES ('$usernames','$passwords','$penggunas','$emails')");

                    header("location:login.php");
                }
                ?>




            </form>
        </div>
    </div>
</body>