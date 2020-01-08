<?php 
include '../layout/header.php';
include '../layout/navbar.php';

require '../../model/Kost.php';
$data = new Kost;
$id = $_GET['id'];
?>

<div class="container">
<a href="index.php" class="btn btn-primary mb-3">Kembali</a>
<h1 class="display-4">View Kost</h1>

<div class="card">
    <div class="card-body">
        <?php 
            foreach ($data->where('id', $id) as $i) {
                echo $i['nama_kost'];
                echo $i['alamat_kost'];
                echo $i['harga_kost'];
                echo $i['jumlah_kost'];
            }
        ?>
    </div>
</div>

</div>

