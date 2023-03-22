<?php 
include "config.php";

$query = "DELETE FROM siswa WHERE RFID='$_GET[id]'";
$data = $conn->prepare($query);
$data->execute();

header("location: siswa.php");
?>