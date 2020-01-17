<?php
session_start();
include '../layout/header.php';

require_once '../../model/VTransaksi.php';
$pemilik = $_SESSION['nama'];
$view = new VTransaksi;
$show = $view->where('pemilik', $pemilik);
?>

<div class="container mt-3">
    <p class="display-4 text-center">Daftar Transaksi</p>
    <div class="card shadow">
        <div class="card-body">
            
            <?php
            if (isset($show)) {
            ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Trans</th>
                            <th>Kost</th>
                            <th>Durasi</th>
                            <th>Bayar</th>
                            <th>Pemesan</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($show as $i) {
                        ?>
                        <tr>
                            <td scope="row"><?= $i['id']; ?></td>
                            <td><?= $i['kost']; ?></td>
                            <td><?= $i['durasi']; ?> Bulan</td>
                            <td><?= $i['bayar']; ?></td>
                            <td><?= $i['pemesan']; ?></td>
                            <td>
                                <?php 
                                if ($i['status'] == 'Sudah Dibayar') {
                                    ?>
                                    <span class="badge badge-success"><?= $i['status']; ?></span>
                                    <?php
                                } else {
                                    ?>
                                    <span class="badge badge-primary"><?= $i['status']; ?></span>
                                    <?php
                                } ?>
                            </td>
                            <td><a href="view.php?id=<?= $i['id'] ?>" class="btn btn-sm btn-info mr-1">View Detail</a></td>
                        </tr>
                        <?php } ?>
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
            <a href="../kostSaya" class="btn btn-success float-right">Selesai</a>
        </div>
    </div>
</div>

<?php include '../layout/footer.php' ?>