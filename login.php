<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman form login</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>

<body>
    <div class="container">
        <div class="kotak_login">
            <p class="tulisan_login">Silahkan login </p>
            <form action="cek_login.php" method="post" role="form">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" name="username" class="Form_login" placeholder="username"
                        autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" class="Form_login" placeholder="password"
                        autocomplete="off">
                </div>
                
                <div class="paragraph">
                 <p> Belum punya akun?</p> <a href="Register.php">Register</a>
                </div>
                
                <input type="submit" class="tombol_login" value="Login">
                
            </form>
           
        </div>
    </div>
</body>

</html>