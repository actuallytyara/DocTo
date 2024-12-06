<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styleadmin2.css">
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table border="1" class="table">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Pengguna</th>
                <th>Email</th>
                <th colspan="2">Aksi</th>
            </tr>

            <?php
            //Select Tabel User dari database
            $nomor = 1;
            include 'koneksi.php';
            $query_mysqli = mysqli_query($mysqli, "SELECT * FROM tb_login ") or die(mysqli_error(die));

            while ($data = mysqli_fetch_array($query_mysqli)) {
            ?>
                <tr>

                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td><?php echo $data['pengguna']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td style="text-align: center">
                        <a href="edit.php?id=<?php echo $data['id']; ?>"><button type="button" class="editButton">
                                EDIT
                            </button></a>
                        <a href="delete.php?id=<?php echo $data['id']; ?>"><button type="button" class="deleteButton">
                                DELETE
                            </button></a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </form>
</body>

</html>