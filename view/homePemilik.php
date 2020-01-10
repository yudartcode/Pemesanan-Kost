<?php 
session_start();
if (!$_SESSION['login']) {
    header('Location:../loginPemilik.php');
}
include 'layout/header.php';
include 'layout/navbar.php';
?>

<div class="container">
    <div class="alert alert-success" style="margin-top: 100px; margin-bottom: 340px">
        <h1 class="text-center display-4">Selamat Datang Ibu/Bapak Kost</h1>
    </div>

    <?php
    include 'layout/footer.php'
    ?>
</div>