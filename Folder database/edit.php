<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
    <link rel="stylesheet" href="styleedit1.css">
</head>

<body>
    <?php
    include("koneksi.php");
    if (!isset($_GET['id'])) {
        header('Location: edit.php');
    }
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM tb_login WHERE id=$id");
    while ($user_data = mysqli_fetch_array($result)) {
        $username = $user_data['username'];
        $password = $user_data['password'];
        $pengguna = $user_data['pengguna'];
        $email = $user_data['email'];
    }
    ?>
    <form method="POST" action="edit2.php">
        <div class="form-edit-box">
            <div class="form-edit-box-username">
                <label for="username">Username : </label>
                <input type="text" name="username" value="<?php echo $username; ?>" required><br>
            </div>
            <div class="form-edit-box-password">
                <label for="password">Password : </label>
                <input type="password" name="password" value="<?php echo $password; ?>" required><br>
            </div>
            <div class="form-edit-box-level">
                <label for="pengguna">Pengguna : </label>
                <input type="radio" name="pengguna" value="<?php echo $pengguna; ?>" required>admin
                <input type="radio" name="pengguna" value="<?php echo $pengguna; ?>">user <br>
            </div>
            <div class="form-edit-box-email">
                <label for="email">Email : </label>
                <input type="email" name="email" value="<?php echo $email; ?>" required> <br>
            </div>
            <div class="form-edit-box-button">
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <input type="submit" name="submit-data" value="Submit">
            </div>
        </div>
    </form>
</body>

</html>