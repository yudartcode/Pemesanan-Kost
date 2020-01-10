<?php
include_once '../model/Pemilik.php';

$id = $_GET['id'];
$pemilik = new Pemilik;
$pemilik->delete($id);

header('Location:../view/Pemilik');