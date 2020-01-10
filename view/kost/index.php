<?php
session_start();
include '../layout/header.php';
include '../layout/navbarAdmin.php';

require_once '../../model/Kost.php';
$kost = new Kost;
$no = 1;
$id;
?>

<div class="container">
    <h1 class="display-4">Daftar Kost</h1>
    <hr>
    <!-- <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#createKost">Tambah</a> -->

    <table id="table" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Kost</th>
                <th>Alamat Kost</th>
                <th>Harga Kost</th>
                <th>Jumlah Kamar</th>
                <th>Tipe</th>
                <th>Fasilitas</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kost->all() as $i) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $i['nama'] ?></td>
                    <td><?= $i['alamat'] ?></td>
                    <td>Rp.<?= $i['harga'] ?></td>
                    <td><?= $i['jumlah_kamar'] ?> Kamar</td>
                    <td><?= $i['tipe'] ?></td>
                    <td><?= $i['fasilitas'] ?></td>
                    <td>
                        <div class="row ml-1">
                            <a href="view.php?id=<?= $i['id'] ?>" class="btn btn-sm btn-info">View</a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
// include 'create.php';
include '../layout/footer.php';
?>