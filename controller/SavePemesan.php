<?php
include_once '../model/Pemesan.php';

$pemesan = new Pemesan;
$pemesan->nama = $_POST['nama'];
$pemesan->alamat = $_POST['alamat'];
$pemesan->no_telpon = $_POST['no_telpon'];
$pemesan->jk = $_POST['jk'];
$pemesan->username = $_POST['username'];
$pemesan->password = md5($_POST['password']);
$pemesan->save();

header('Location:../view/Pemesan');
