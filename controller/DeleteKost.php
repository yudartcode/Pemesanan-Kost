<?php
include_once '../model/Kost.php';

$id = $_GET['id'];
$kost = new Kost;
$kost->delete($id);

header('Location:../view/kostSaya');