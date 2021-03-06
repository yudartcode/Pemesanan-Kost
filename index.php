<!DOCTYPE html>
<html lang="en">

<head>
  <title>KOSTKUY - Cari Kost YUK</title>
  <link rel="stylesheet" href="public/css/bootstrap.css">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/c2.css">
  <link href="https://fonts.googleapis.com/css?family=Sacramento&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>

<body>
  <?php
  session_start();
  $user = isset($_SESSION['nama']);
  ?>
  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="public/img/logoKKw.svg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#rekom">Rekomendasi Kost</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about-us">Tentang Kami</a>
            </li>

            <?php
            if (isset($_SESSION['login'])) {
              if (isset($_SESSION['role']) && $_SESSION['role'] == 'pemesan') {
            ?>
                <li class="nav-item">
                  <a class="nav-link" href="view/transaksi/pembayaran.php">Transaksi Saya</a>
                </li>
              <?php
              }
              ?>
              <li class="nav-item">
                <a class="nav-link" href="/Pemesanan-Kost/controller/LoginController.php">Logout</a>
              </li>
            <?php
            } else {
            ?>
              <li class="nav-item">
                <a class="nav-link" href="#regist">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>

  </section>

  <section id="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="promo-title">KOST KUY</p>
          <p>Sekumpulan anak - anak kuliahan yang sangat suka ditemani kopi dan senja.</p>
          <a href=""><img src="" alt=""></a>
        </div>

        <div class="col-md-6 text-center">
          <i class="fa fa-bed fa-4x" id="kasur"></i>
        </div>
      </div>
    </div>
    <div class="header">
      <form>
        <p style="font-family: 'Raleway', sans-serif; font-size: 30px">Mau cari kos?</p>
        <div class="row">
          <a href="view/transaksi/pencarian.php" class="btn btn-lg btn-outline-light">Cari Nama Lokasi Area/Alamat</a>
        </div>
    </div>
    </form>
    </div>

  </section>

  <section id="regist">
    <!-- carousel -->
    <div class="container">
      <div class="row">
        <div class="panel">

          <!-- slide -->
          <div id="carouselExampleIndicators" style="position: static" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <!-- slide 1 -->
                <div class="slide">
                  <div class="baris"></div>
                  <h1>Register Now</h1>
                  <p>I'm a paragraph. Click here to edit and add your own text. I'm a great place for
                    you
                    to tell your story and let your customers know a little more about you
                    <br>
                    <br>
                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#createPemesan">Register Here</a>
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <!-- slide 2 -->
                <div class="slide">
                  <div class="baris"></div>
                  <h1>Tentang Kami</h1>
                  <p>Jika kamu ingin mendapatkan inspirasi desain kamar minimalis atau kamar kost minimalis kamu bisa
                    cek kost eksklusif yang ada di Kost Kuy. Dengan luas ruangan yang hampir sama, kebanyakan Kamar kost
                    eksklusif hanya diberikan desain kamar atau dekorasi kamar yang lebih menarik, ditambah tempat tidur
                    beserta atributnya dan kamar mandi dalam plus AC, dengan tambahan internet.
                    <br>
                    <br>
                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#createPemesan">Register Here</a>
                  </p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


        </div>
      </div>
    </div>
  </section>
  <!-- rekomendasi -->
  <section id="rekom">
    <div class="container">
      <h1 class="title text-center">Rekomendasi Kost</h1>
      <?php
      include_once 'model/Kost.php';
      $kost = new Kost;
      $kost = $kost->allOrder('harga', 'ASC');
      ?>
      <div class="row">
        <?php foreach ($kost as $i) {
          ?>
        <div class="col-md-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="public/img/kost.jpg" class="card-img">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $i['nama']; ?></h5>
                  <h3><strong>Rp.<?= $i['harga']; ?></strong><small>/bulan</small></h3>
                  <p class="card-text"><small><?= $i['alamat']; ?></small></p>
                  <a href="#" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- Tentang Kami -->
  <section id="about-us">
    <div class="container text-center">
      <h1 class="title ttk">Tentang Kami</h1>

      <div class="row">
        <div class="col-md-6 text-left">
          <p> KOSTKUY menyajikan informasi Kamar kosan, lengkap dengan fasilitas kost, harga kost, dan dekorasi kamar
            beserta foto desain kamar yang disesuaikan dengan kondisi sebenarnya. Setiap Rumah Kost yang ada di
            KOSTKUY benar-benar kami datangi, kami verifikasi, kami seleksi dan kami ambil data langsung, termasuk
            kost yang didaftarkan oleh pemilik atau umum. Informasi ketersediaan kamar kost dan harga kost kami
            update max setiap 2 minggu sekali untuk memastikan info kost kami akurat dan bermanfaat untuk anak kost.
          </p>
        </div>

        <div class="col-md-6 text-center">
          <i class="fa fa-users" id="kita"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 text-center">
          <img src="public/img/logoKKw.svg" width="150px" alt="KOST KUY">
        </div>

        <div class="col-md-4">
          <h3>CONTACT US</h3>
          <br><i class="fa fa-envelope"></i> kostkuy@gmail.com
          </p>

        </div>

        <div class="col-md-3">
          <h3>FIND US</h3>
          <a href="#"><i class="fa fa-facebook-square"></i></a>
          <a href="https://instagram.com/yudakarnaen"><i class="fa fa-instagram"></i></a>
          <a href=""><i class="fa fa-twitter"></i></a>
          <a href=""><i class="fa fa-youtube-play"></i></a>
          <a href=""><i class="fa fa-rss"></i></a>
        </div>

      </div>
    </div>
  </section>
  <?php include 'register.php' ?>
  <?php include 'view/layout/footer.php' ?>
</body>
<script src="public/js/smooth-scroll.js"></script>
<script>
  var scroll = new SmoothScroll('a[href*="#"]');
</script>
<script src="public/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="public/js/jsdelivr.js"></script>
<script src="public/js/stackpath.js"></script>

</html>