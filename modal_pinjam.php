<?php
include "config.php";

?>
<!-- modal tambah -->
<div class="modal" tabindex="-1" role="dialog" id="modaltambah">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="">      
  <div class="form-group">
    <label for="RFID">Nomor RFID</label>
    <input type="text" class="form-control has-validation" id="RFID" name="RFID" placeholder="No. RFID" onKeyPress="return keyPressed(event)">
  </div>
  <div class="form-group>
      <label for="kelas">Barang Yang Akan Dipinjam</label>
      <select id="kelas" name="idbarang" class="form-control">
        <option selected>Pilih Barang...</option>

        <?php
                    $query = "SELECT * FROM barang WHERE STOK > 0";
                    $data = $conn->prepare($query);
                    $data->execute();

                    while($brg = $data->fetch()){

                        echo "<option value='" . $brg['ID_BARANG'] . "'>" . $brg['NAMA_BARANG'] . "</option>";
                    }

                    if (isset($_POST["pinjam"])) {
                        $idbarang = $_POST['idbarang'];
                        $query = "INSERT INTO peminjaman VALUES('?', '$_POST[RFID]', '$_POST[idbarang]')";
                        $data = $conn->prepare($query);
                        $data->execute();

                    }
         ?>

      </select>
    </div>
   

      </div>
      <div class="modal-footer">
        <input type="submit" name="pinjam" class="btn btn-primary"></input>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </form>
</div>