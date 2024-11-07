<?php
require 'fungsi/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="aset/css/login.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Register</h3>
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
                            <label for="fullName" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" required placeholder="masukkaan nama lengkap anda...">
                        </div>
                        <div class="mb-3">
                            <label for="registerEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" required placeholder="Email...">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">No Telepon</label>
                            <input type="number" class="form-control" name="no_telepon" required placeholder="No Telepon...">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Alamat</label>
                            <textarea type="text" class="form-control" name="alamat" rows="5" placeholder="Alamat Lengkap..."></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="registerPassword" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" required placeholder="Username...">
                        </div>
                        <div class="mb-3">
                            <label for="registerPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required placeholder="Password...">
                        </div>
                        <div class="mb-3">
                            <label for="userRole" class="form-label">Role</label>
                            <select class="form-select" name="level" required>
                                <option value="" disabled selected>Pilih role</option>
                                <option value="admin">Admin</option>
                                <option value="peminjam">Peminjam</option>
                            </select>
                        </div>
                        <button type="submit" name="register" value="register" class="btn btn-primary w-100">Register</button>
                    </form>
                    <p class="mt-3 text-center">Already have an account? <a href="login.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
