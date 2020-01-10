<?php

$id = $_SESSION['id'];
?>
<div class="modal fade" id="createKost" tabindex="-1" role="dialog" aria-labelledby="createKostTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createKostTitle">Create Kost</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../../controller/SaveKost.php" method="post">
                    <div class="form-group">
                        <label for="nama">Nama Kost</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Kost</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Kost</label>
                        <input type="text" class="form-control" name="harga" id="harga" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Kost</label>
                        <input type="number" class="form-control" name="jumlah" id="jumlah" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <select class="form-control" name="tipe" id="tipe">
                            <option value="L">Laki-Laki</option>
                            <option value="P">Wanita</option>
                            <option value="U">Umum</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fasilitas">Fasilitas</label>
                        <select multiple class="form-control" name="fasilitas[]" id="fasilitas">
                            <option value="Kasur">Kasur</option>
                            <option value="Lemari">Lemari</option>
                            <option value="Kamar Mandi">Kamar Mandi</option>
                            <option value="Air">Air</option>
                            <option value="Listrik">Listrik</option>
                            <option value="Wifi">Wifi</option>
                        </select>
                    </div>
                    <input type="hidden" name="id_pemilik" value="<?= $id ?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Save and close" name="submit">
                </form>
            </div>
        </div>
    </div>
</div>