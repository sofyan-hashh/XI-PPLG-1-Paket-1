<?php
require 'fungsi/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login ke Perpustakaan Digital</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="aset/css/style.css">
</head>
<body class="bg-light">

<div class="container">
    <div class="row justify-content-center" style="height: 100vh;">
        <div class="col-md-4">
            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Login</h5>
                    <?php
                        if( isset($_POST['login'])) {
                            $username = $_POST['username'];
                            $password = md5($_POST['password']);
                            
                            $data = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'");
                            $cek = mysqli_num_rows($data);
                            if($cek > 0) {
                                $_SESSION['user'] = mysqli_fetch_array($data);
                                echo '<script>alert("Selamat datang di Perpustakaan Digital!"); location.href="index.php";</script>';
                            } else {
                                echo '<script>alert("username kro password salah, coba ulang ")</script>';
                            }
                        }
                    ?>
                    <form method="post">
                        <div class="mb-3">
                            <label for="email
                            " class="form-label">Username</label>
                            <input type="username" class="form-control"  name="username" placeholder="username..." required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="password...">
                        </div>
                        <button type="submit"name="login" value="login" class="btn btn-primary w-100">Login</button>
                    </form>
                    <div class="text-center mt-3">
                        <p>Belum punya akun?<a href="register.php">Daftar disini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="aset/js/login.js"></script>
</body>
</html>
