<div class="modal fade" id="createPemilik" tabindex="-1" role="dialog" aria-labelledby="createPemilikTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createPemilikTitle">Create Pemilik</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../../controller/SavePemilik.php" method="post">
                    <div class="form-group">
                      <label for="nama">Nama Pemilik</label>
                      <input type="text"
                        class="form-control" name="nama" id="nama" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat Pemilik</label>
                      <input type="text"
                        class="form-control" name="alamat" id="alamat" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                      <label for="no_telpon">No Telpon</label>
                      <input type="text"
                        class="form-control" name="no_telpon" id="no_telpon" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                      <label for="rekening">Rekening</label>
                      <input type="text"
                        class="form-control" name="rekening" id="rekening" aria-describedby="helpId" placeholder="BANK 123456">
                      <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text"
                        class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password"
                        class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted"></small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Save and close" name="submit">
                </form>
            </div>
        </div>
    </div>
</div>