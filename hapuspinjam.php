<?php 
include "config.php";


$query = "DELETE FROM peminjaman WHERE ID_PINJAM='$_GET[id]';
UPDATE barang SET STOK = STOK + 1 WHERE ID_BARANG='$_GET[idbrg]'";
$data = $conn->prepare($query);
$data->execute();

header("location: index.php");
?>