<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">Brand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/Pemesanan-Kost/view/kostSaya">Kost Saya</a>
                <a class="nav-item nav-link" href="/Pemesanan-Kost/view/transaksi/transaksi.php">Daftar Transaksi</a>
            </div>

            <div class="dropdown ml-auto">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $_SESSION['nama'] ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="/Pemesanan-Kost/controller/LoginController.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>