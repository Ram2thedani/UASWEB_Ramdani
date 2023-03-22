<?php
include "config.php";
$query = "UPDATE siswa SET NAMA='$_POST[nama]', KELAS='$_POST[kelas]' WHERE RFID='$_POST[RFID]'";
$data = $conn->prepare($query);
$data->execute();
header("location:siswa.php");
?>