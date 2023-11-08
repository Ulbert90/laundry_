<?php
include_once "../koneksi.php";

$id = $_POST ['id'];
$name = $_POST['costumer_name'];
$phone = $_POST['costumer_phone'];
$location = $_POST['costumer_location'];


mysqli_query($koneksi, "UPDATE costumer SET costumer_name='$name', costumer_phone='$phone', costumer_location='$location' 
WHERE costumer_id='$id'");
header("location:costumer.php");