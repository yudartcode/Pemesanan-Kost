<?php
include '../layout/header.php';
include '../layout/navbarAdmin.php';

require '../../model/Pemilik.php';
$pemilik = new Pemilik;
$id = $_GET['id'];
$show = $pemilik->where('id', $id);
$show = mysqli_fetch_assoc($show);
?>

<div class="container">
  <a href="index.php" class="btn btn-primary mb-3">Kembali</a>
  <h1 class="display-4">Update Pemilik</h1>

  <div class="card shadow">
    <div class="card-body">
      <form action="../../controller/UpdatePemilik.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="form-group">
          <label for="nama">Nama Pemilik</label>
          <input value="<?= $show['nama']; ?>" type="text" class="form-control" name="nama" id="nama" placeholder="" autofocus>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat Pemilik</label>
          <input value="<?= $show['alamat']; ?>" type="text" class="form-control" name="alamat" id="alamat" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="no_telpon">no_telpon Pemilik</label>
          <input value="<?= $show['no_telpon']; ?>" type="text" class="form-control" name="no_telpon" id="no_telpon" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="rekening">rekening Pemilik</label>
          <input value="<?= $show['rekening']; ?>" type="text" class="form-control" name="rekening" id="rekening" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" value="<?= $show['username'] ?>" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted"></small>
        </div>
        <input type="submit" class="btn btn-primary" value="Update" name="submit">
      </form>
    </div>
  </div>
</div>

<?php
include '../layout/footer.php'
?>