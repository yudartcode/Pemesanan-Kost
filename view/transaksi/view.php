<?php
session_start();
include '../layout/header.php';

require_once '../../model/VTransaksi.php';
$id = $_GET['id'];
$view = new VTransaksi;
$show = $view->where('id', $id);
$show = mysqli_fetch_assoc($show);
?>

<div class="container mt-3">
    <p class="display-4 text-center">Detail Transaksi</p>
    <a href="transaksi.php" class="btn btn-primary mb-3">Kembali</a>
    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <td>ID Transaksi</td>
                    <th><?= $show['id']; ?></th>
                </tr>
                <tr>
                    <td>Nama Kost</td>
                    <th><?= $show['kost']; ?></th>
                </tr>
                <tr>
                    <td>Nama Pemesan</td>
                    <th><?= $show['pemesan']; ?></th>
                </tr>
                <tr>
                    <td>Tanggal Masuk</td>
                    <th><?= $show['tgl_masuk']; ?></th>
                </tr>
                <tr>
                    <td>Durasi</td>
                    <th><?= $show['durasi']; ?></th>
                </tr>
                <tr>
                    <td>Total Bayar</td>
                    <th><?= $show['bayar']; ?></th>
                </tr>
                <tr>
                    <td>Status</td>
                    <th><?= $show['status']; ?></th>
                </tr>
            </table>
            <hr>
            <form action="../../controller/UpdateTransaksi.php" method="post">
                <input type="hidden" name="id" value="<?= $show['id']; ?>">
                <input type="hidden" name="status" value="Sudah Dibayar">
                <input type="submit" value="Sudah Bayar" class="btn btn-success float-right">
            </form>            
        </div>
    </div>
</div>

<?php include '../layout/footer.php' ?>