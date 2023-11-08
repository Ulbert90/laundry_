<?php
include_once "../koneksi.php";

$id = $_GET['id'];

$result = mysqli_query($koneksi, "DELETE FROM costumer WHERE costumer_id='$id'");

if ($result) {
    header("location: costumer.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
