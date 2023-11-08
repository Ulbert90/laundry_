<?php
$koneksi = mysqli_connect("localhost", "root", "", "money_loan");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}
