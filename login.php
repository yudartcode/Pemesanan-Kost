<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/loginc1.css">
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6 pt-5">

                <div class="card">
                    <div id="card-title">
                        <h2>LOGIN</h2>
                        <div class="card-body">
                            <form method="POST" action="" class="label">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" required> <br />
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required> <br />
                                <input type="submit" name="login" class="btn btn-outline-primary btn-block" value="Login">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'pemesanan_kost';
$conn = mysqli_connect($host, $username, $password, $database);

$user = $_POST['username'];
$pass = $_POST['password'];

if (isset($_POST['login'])) {
    session_start();
    
    if ($user == "admin" && $pass == "admin") {
        $_SESSION['login'] = TRUE;
        $fnama = $user;
        header('Location:view/homeAdmin.php');
    } else {
        $pass = md5($_POST['password']);
        $cek = $conn->query("SELECT * FROM tb_pemilik WHERE username='$user' AND password='$pass'");
        if ($cek->num_rows == 1) {
            $cek = mysqli_fetch_assoc($cek);
            $fid = $cek['id'];
            $fnama = $cek['nama'];
            $_SESSION['login'] = TRUE;
            $_SESSION['id'] = $fid;
            $_SESSION['nama'] = $fnama;
            header('Location:view/homePemilik.php');
        } else {
            ?>
            <script>
                alert('Login Gagal, Username atau Password yg anda masukkan salah')
            </script>
            <?php
        }
    }
}
?>

</html>