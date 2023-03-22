<?php 
include "config.php";

$query = "DELETE FROM barang WHERE ID_BARANG='$_GET[id]'";
$data = $conn->prepare($query);
$data->execute();

header("location: barang.php");
?>