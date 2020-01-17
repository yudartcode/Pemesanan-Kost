<?php
session_start();
if (!$_SESSION['login']) {
    header('Location:../login.php');
}

include 'layout/header.php';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Kuy Kost</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <!-- <a class="nav-item nav-link" href="/Pemesanan-Kost/view/kost">Daftar Kost</a> -->
            <a class="nav-item nav-link" href="/Pemesanan-Kost/view/pemilik">Daftar Pemilik</a>
            <a class="nav-item nav-link" href="/Pemesanan-Kost/view/kost">Daftar Kost</a>
            <a class="nav-item nav-link" href="/Pemesanan-Kost/view/pemesan">Daftar Pemesan</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="dropdown ml-auto">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admin
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="../controller/LoginController.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <div class="alert alert-success" style="margin-top: 100px; margin-bottom: 340px">
        <h1 class="text-center display-4">Selamat Datang Admin</h1>
    </div>

    <?php
    include 'layout/footer.php'
    ?>
</div>