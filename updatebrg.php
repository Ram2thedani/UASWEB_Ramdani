<?php
include "config.php";
$query = "UPDATE barang SET NAMA_BARANG='$_POST[namabarang]', STOK='$_POST[stok]' WHERE ID_BARANG='$_POST[idbarang]'";
$data = $conn->prepare($query);
$data->execute();
header("location:barang.php");
?>