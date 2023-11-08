<?php
include_once "../koneksi.php";


$name = $_POST['costumer_name'];
$phone = $_POST['costumer_phone'];
$location = $_POST['costumer_location'];


mysqli_query($koneksi, "INSERT into costumer values( '', '$name', '$phone' ,'$location')");
header("location:costumer.php");