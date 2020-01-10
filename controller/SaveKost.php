<?php
include_once '../model/Kost.php';
$fas = [];
foreach ($_POST['fasilitas'] as $key) {
    $fas[] = $key;
}
$fasilitas = implode(', ', $fas);

$kost = new Kost;
$kost->nama = $_POST['nama'];
$kost->alamat = $_POST['alamat'];
$kost->harga = $_POST['harga'];
$kost->jumlah_kamar = $_POST['jumlah'];
$kost->tipe = $_POST['tipe'];
$kost->fasilitas = $fasilitas;
$kost->id_pemilik = $_POST['id_pemilik'];
$kost->save();

header('Location:../view/KostSaya');
