<?php
session_start();
include '../layout/header.php';

require_once '../../model/Booking.php';
require_once '../../model/Pemilik.php';
require_once '../../model/Kost.php';
$booking = new Booking;
$no = 1;
$id_pemesan = $_SESSION['id'];
$show = $booking->where('id_pemesan', $id_pemesan);
$show = mysqli_fetch_assoc($show);

$kost = new Kost;
$kostv = $kost->where('id', $show['id_kost']);
$kostv = mysqli_fetch_assoc($kostv);

$pemilik = new Pemilik;
$milik = $pemilik->where('id', $kostv['id_pemilik']);
$milik = mysqli_fetch_assoc($milik);
?>

<div class="container mt-3">
    <p class="display-4 text-center">Pembayaran</p>
    <div class="card shadow">
        <div class="card-body">
            <h4 class="card-title">
                Detal Transaksi
            </h4>
            <hr>
            <?php
            if (isset($show)) {
            ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID Trans</th>
                            <th>Kost</th>
                            <th>Tgl Masuk</th>
                            <th>Durasi</th>
                            <th>Tgl Keluar</th>
                            <th>Pemesan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row"><?= $show['id']; ?></td>
                            <td><?= $show['id_kost']; ?></td>
                            <td><?= $show['tgl_masuk']; ?></td>
                            <td><?= $show['durasi']; ?> Bulan</td>
                            <td><?= $show['tgl_keluar']; ?></td>
                            <td><?= $show['id_pemesan']; ?></td>
                            <td>
                            <?php 
                                if ($show['status'] == 'Sudah Dibayar') {
                                    ?>
                                    <span class="badge badge-success"><?= $show['status']; ?></span>
                                    <?php
                                } else {
                                    ?>
                                    <span class="badge badge-primary"><?= $show['status']; ?></span>
                                    <?php
                                } ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php
            } else {
                ?>
                <h5 class="card-title text-center">
                    Belum ada transaksi
                </h5>
                <?php
            }
            ?>
            <hr>
            <h6 class="card-title text-center">
                Silahkan Melakukan Pembayaran ke nomer rekening <strong><?= $milik['rekening']; ?></strong> an. <strong><?= $milik['nama']; ?></strong> dengan nominal <strong>Rp.<?= $show['bayar']; ?></strong> setelah itu melakukan konfirmasi pembayaran ke no telpon <strong><?= $milik['no_telpon']; ?></strong>.
            </h6>
            <a href="../../" class="btn btn-success float-right">Selesai</a>
        </div>
    </div>
</div>

<?php include '../layout/footer.php' ?>