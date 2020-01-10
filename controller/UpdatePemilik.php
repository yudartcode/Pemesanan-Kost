<?php
include_once '../model/Pemilik.php';

$id = $_POST['id'];
$pemilik = new Pemilik;
$pemilik->nama = $_POST['nama'];
$pemilik->alamat = $_POST['alamat'];
$pemilik->no_telpon = $_POST['no_telpon'];
$pemilik->rekening = $_POST['rekening'];
$pemilik->username = $_POST['username'];
$pemilik->password = $_POST['password'];
$pemilik->update($id);

header('Location:../view/Pemilik');
