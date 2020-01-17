<?php
include_once '../model/Booking.php';

$id = $_POST['id'];
$booking = new Booking;
$booking->status = $_POST['status'];
$booking->update($id);

header('Location:../view/transaksi/transaksi.php');
