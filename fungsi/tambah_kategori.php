<div class="card">
    <div class="card-body">
<h1 class="mt-4">Tambah Data Kategori</h1><br>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                        if(isset($_POST['submit']) ) {
                            $kategori = $_POST['kategori'];
                            $query = mysqli_query($koneksi, "INSERT INTO kategori(kategori) VALUES('$kategori')");

                            if($query) {
                                echo '<script>Swal.fire({
                                title: "Good job!",
                                text: "Tambah Kategori Berhasil :)",
                                icon: "success"
                                });</script>';
                            }else{
                                echo '<script>Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: "Tambah Kategori Gagal :("
                                });</script>';
                            }
                        }

                    ?>
                    <div class="row mb-3">
                        <div class="col-md-2">Nama Kategori</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="kategori" placeholder="isi disini...."></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=kategori" class="btn btn-danger">Kembali</a>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>