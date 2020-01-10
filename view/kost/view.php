<?php
session_start();
include '../layout/header.php';
include '../layout/navbarAdmin.php';

require '../../model/Kost.php';
$kost = new Kost;
$id = $_GET['id'];
$show = $kost->where('id', $id);
$show = mysqli_fetch_assoc($show);
?>

<div class="container">
    <a href="index.php" class="btn btn-primary mb-3">Kembali</a>
    <h1 class="display-4">Update Kost</h1>

    <div class="card shadow">
        <div class="card-body">
            <form action="../../controller/UpdateKost.php" method="post">
                <input type="hidden" name="id" value="<?= $id ?>">
                <div class="form-group">
                    <label for="nama">Nama Kost</label>
                    <input value="<?= $show['nama']; ?>" type="text" class="form-control" name="nama" id="nama" placeholder="" autofocus>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Kost</label>
                    <input value="<?= $show['alamat']; ?>" type="text" class="form-control" name="alamat" id="alamat" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="harga">Harga Kost</label>
                    <input value="<?= $show['harga']; ?>" type="text" class="form-control" name="harga" id="harga" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah Kost</label>
                    <input value="<?= $show['jumlah']; ?>" type="number" class="form-control" name="jumlah" id="jumlah" aria-describedby="helpId" placeholder="">
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
                    <select multiple class="form-control" name="fasilitas" id="fasilitas">
                        <option value="Kasur, ">Kasur</option>
                        <option value="Lemari, ">Lemari</option>
                        <option value="Kamar Mandi, ">Kamar Mandi</option>
                        <option value="Air, ">Air</option>
                        <option value="Listrik, ">Listrik</option>
                        <option value="Wifi">Wifi</option>
                    </select>
                </div>
                <!-- <input type="submit" class="btn btn-primary" value="Update" name="submit"> -->
            </form>
        </div>
    </div>
</div>

<?php
include '../layout/footer.php'
?>