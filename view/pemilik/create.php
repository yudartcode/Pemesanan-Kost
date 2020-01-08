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
                <form action="create.php" method="post">
                    <div class="form-group">
                        <label for="nama_kost">Nama Kost</label>
                        <input type="text" class="form-control" name="nama_kost" id="nama_kost" placeholder="" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="alamat_kost">Alamat Kost</label>
                        <input type="text" class="form-control" name="alamat_kost" id="alamat_kost" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="harga_kost">Harga Kost</label>
                        <input type="text" class="form-control" name="harga_kost" id="harga_kost" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_kost">Jumlah Kost</label>
                        <input type="number" class="form-control" name="jumlah_kost" id="jumlah_kost" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Save">
                </form>
            </div>
        </div>
    </div>
</div>
