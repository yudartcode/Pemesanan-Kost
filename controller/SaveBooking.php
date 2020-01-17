<?php
include_once '../model/Booking.php';
$tgl = time();
$tgl = date('yy-m-d', $tgl);
$masuk = $_POST['tgl_masuk'];
$durasi = $_POST['durasi'];
$keluar = date('yy-m-d', strtotime('+'.$durasi.' month', strtotime($masuk)));
$bayar = $_POST['harga'] * $durasi;


$booking = new Booking;
$booking->tgl_transaksi = $tgl;
$booking->tgl_masuk = $_POST['tgl_masuk'];
$booking->durasi = $_POST['durasi'];
$booking->bayar = $bayar;
$booking->tgl_keluar = $keluar;
$booking->id_kost = $_POST['id_kost'];
$booking->id_pemesan = $_POST['id_pemesan'];

$booking->save();

header('Location:../view/transaksi/pembayaran.php');
