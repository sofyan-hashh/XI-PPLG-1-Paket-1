<?php
require 'fungsi/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrasi ke Perpustakaan Digital</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="aset/css/style.css">
</head>
<body class="bg-light">

<div class="container">
    <div class="row justify-content-center" style="height: 100vh;">
        <div class="col-md-4">
            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Daftar akun</h5>
                    <?php
                        if( isset($_POST['register'])) {
                            $nama = $_POST['nama'];
                            $email = $_POST['email'];
                            $alamat = $_POST['alamat'];
                            $no_telepon = $_POST['no_telepon'];
                            $username = $_POST['username'];
                            $level = $_POST['level'];
                            $password = md5($_POST['password']);

                            $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,no_telepon,username,password,level) VALUES('$nama','$email','$alamat','$no_telepon','$username','$password','$level')"); 
                        
                            if($insert) {
                                echo '<script>alert("Pendaftaran Berhasil!"); location.href="login.php"</script>';   
                            }else{
                                echo '<script>alert("Pendaftaran Gagal!");</script>';   
                            }
                        }

                            
                    ?>
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="nama" required class="form-control" name="nama" placeholder="Nama Lengkap..." />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" required class="form-control" name="email" placeholder="Email..." />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Telepon</label>
                            <input type="no_telepon" required class="form-control" name="no_telepon" placeholder="No Telepon..." />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" required class="form-control" placeholder="alamat..."></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="username" required class="form-control" name="username" placeholder="Username..." />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" required class="form-control" id="password" name="password" placeholder="Password...">
                        </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Daftar Sebagai</label>
                            <select class="form-select" aria-label="Default select example">
                                 <option value="admin">admin</option>
                                 <option value="peminjam">peminjam</option>
                            </select>
                        </div>
                        <button type="submit" name="register" value="register" class="btn btn-primary w-100">Daftar</button>
                    </form>
                    <div class="text-center mt-3">
                        <p>Sudah punya akun?<a href="login.php">Login</a></p>
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
