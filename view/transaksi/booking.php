<?php
include '../layout/header.php';
session_start();
if (!$_SESSION['login']) {
    header('Location:../../login.php');
}

require '../../model/Kost.php';
$Kost = new Kost;
$id = $_GET['id'];
$show = $Kost->where('id', $id);
$show = mysqli_fetch_assoc($show);
?>

<div class="container mt-3">
    <p class="display-4">Form Booking</p>
    <div class="row">
        <div class="col-md-6">
            <div class="card text-left shadow">
                <img class="card-img-top" src="../../public/img/kost.jpg" alt="">
                <div class="card-body">
                    <h2 class="card-title float-right">Rp.<?= $show['harga']; ?><small><small><small>/bulan</small></small></small></h2>
                    <h4 class="card-title"><?= $show['nama'] ?></h4>
                    <p class="card-text"><?= $show['alamat']; ?></p>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <p class="card-text mb-0">Fasilitas</p>
                            <h6 class="card-title"><?= $show['fasilitas']; ?></h6>
                        </div>
                        <div class="col">
                            <p class="card-text mb-0">Jumlah Kamar</p>
                            <h6 class="card-title"><?= $show['jumlah_kamar']; ?></h6>
                        </div>
                        <div class="col">
                            <p class="card-text mb-0">Tipe Kost</p>
                            <h6 class="card-title"><?= $show['tipe']; ?></h6>
                        </div>
                        <div class="col">
                            <p class="card-text mb-0">Pemilik</p>
                            <h6 class="card-title"><?= $show['id_pemilik']; ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <form action="../../controller/SaveBooking.php" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Pemesan</label>
                            <input type="text" class="form-control" name="nama" id="nama" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="tgl_masuk">Tanggal Masuk</label>
                            <input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="durasi">Durasi (Bulan)</label>
                            <input type="number" class="form-control" name="durasi" id="durasi" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>                        

                        <input type="hidden" name="harga" value="<?= $show['harga']; ?>">
                        <input type="hidden" name="id_kost" value="<?= $show['id']; ?>">
                        <input type="hidden" name="id_pemesan" value="<?= $_SESSION['id'] ?>">
                        <input type="submit" value="Booking" class="btn btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../layout/footer.php' ?>