<?php

include_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM tb_login WHERE id = $id");
header("location:admin.php");
