<?php
include_once '../model/Kost.php';

$id = $_POST['id'];
$kost = new Kost;
$kost->nama = $_POST['nama_kost'];
$kost->alamat = $_POST['alamat_kost'];
$kost->harga = $_POST['harga_kost'];
$kost->jumlah_kamar = $_POST['jumlah_kost'];
$kost->tipe = $_POST['tipe'];
$kost->fasilitas = $_POST['fasilitas'];
$kost->id_pemilik = $_POST['id_pemilik'];
$kost->update($id);

header('Location:../view/KostSaya');
