<?php
include_once '../model/Pemesan.php';

$id = $_GET['id'];
$pemesan = new Pemesan;
$pemesan->delete($id);

header('Location:../view/Pemesan');