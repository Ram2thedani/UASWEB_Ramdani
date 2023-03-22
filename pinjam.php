<?php
include "config.php";
if (isset($_POST["pinjam"])) {
                        $idbarang = $_POST['idbarang'];
                        $query = "INSERT INTO peminjaman VALUES('?', '$_POST[RFID]', '$_POST[idbarang]');
                        UPDATE barang SET STOK = STOK - 1 WHERE ID_BARANG='$_POST[idbarang]'";
                        $data = $conn->prepare($query);
                        $data->execute();

                
                        
                        header("location:index.php");
                    }
                    ?>
                    <script>
                        
                        </script>