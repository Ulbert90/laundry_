<?php
include_once "../koneksi.php";

$password_baru = $_POST['password_baru'];
mysqli_query($koneksi, "UPDATE admin SET password='$password_baru'");
header("location: ganti_pas.php?pesan=ok");
