<?php
include '../layout/header.php';
include '../layout/navbarAdmin.php';

require '../../model/Pemilik.php';
$data = new Pemilik;
$no = 1;
?>

<div class="container">
    <h1 class="display-4">Daftar Pemilik</h1>
    <hr>
    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#createPemilik">Tambah</a>

    <table id="table" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Pemilik</th>
                <th>Alamat Pemilik</th>
                <th>No Telpon</th>
                <th>Rekening</th>
                <th width="200px"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data->all() as $i) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $i['nama'] ?></td>
                    <td><?= $i['alamat'] ?></td>
                    <td><?= $i['no_telpon'] ?></td>
                    <td><?= $i['rekening'] ?></td>
                    <td>
                        <div class="row ml-1">
                            <a href="update.php?id=<?= $i['id'] ?>" class="btn btn-sm btn-info mr-1">Edit</a>
                            <form action="../../controller/DeletePemilik.php?id=<?= $i['id'] ?>" method="post">
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
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