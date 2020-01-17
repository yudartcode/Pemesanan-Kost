<?php

require '../../model/Kost.php';
$kost = new Kost;
$no = 1;
include '../layout/header.php';
?>

<div class="container mt-3">
    <p class="display-4">Cari Kost Disini</p>
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
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
                                            <a href="booking.php?id=<?= $i['id'] ?>" class="btn btn-sm btn-info">Booking</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '../layout/footer.php'
?>