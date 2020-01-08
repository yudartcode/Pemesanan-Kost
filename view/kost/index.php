<?php
include '../layout/header.php';
include '../layout/navbar.php';

require '../../model/Kost.php';
$data = new Kost;
$no = 1;
?>

<div class="container">
    <h1 class="display-4">Daftar Kost</h1>
    <hr>
    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#createKost">Tambah</a>

    <table id="table" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Kost</th>
                <th>Alamat Kost</th>
                <th>Harga Kost</th>
                <th>Jumlah Kost</th>
                <th width="200px"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data->all() as $i) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $i['nama_kost'] ?></td>
                    <td><?= $i['alamat_kost'] ?></td>
                    <td>Rp.<?= $i['harga_kost'] ?></td>
                    <td><?= $i['jumlah_kost'] ?> Kamar</td>
                    <td>
                        <a href="view.php?id=<?= $i['id'] ?>" class="btn btn-sm btn-info">View</a>
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <button class="btn btn-sm btn-danger" href="">Delete</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include '../layout/footer.php';
include 'create.php';
?>