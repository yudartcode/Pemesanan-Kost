<div class="modal fade" id="createPemesan" tabindex="-1" role="dialog" aria-labelledby="createPemesanTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createPemesanTitle">Form Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../../controller/SavePemesan.php" method="post">
                    <div class="form-group">
                        <label for="nama">Nama Pemesan</label>
                        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Pemesan</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="no_telpon">No Telpon</label>
                        <input type="text" class="form-control" name="no_telpon" id="no_telpon" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                      <label for="jk">Jenis Kelamin</label>
                      <select class="form-control" name="jk" id="jk">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Wanita</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
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