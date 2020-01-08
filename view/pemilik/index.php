<?php
include '../layout/header.php';
include '../layout/navbar.php';

require '../../model/Pemilik.php';
$data = new Pemilik;
$no = 1;
?>

<div class="container">
    <h1 class="display-4">Daftar Pemilik</h1>
    <hr>
    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#createKost">Tambah</a>

    <table id="table" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Pemilik</th>
                <th>Alamat Pemilik</th>
                <th>No Telpon</th>
                <th width="200px"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data->all() as $i) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $i['nama_pemilik'] ?></td>
                    <td><?= $i['alamat_pemilik'] ?></td>
                    <td><?= $i['no_telpon'] ?></td>
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