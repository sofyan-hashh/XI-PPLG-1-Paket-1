<div class="card">
    <div class="card-body">
<h1 class="mt-4">Tambah Data Buku</h1><br>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                        if(isset($_POST['submit']) ) {
                            $id_kategori = $_POST['id_kategori'];
                            $judul = $_POST['judul'];
                            $penulis = $_POST['penulis'];
                            $penerbit = $_POST['penerbit'];
                            $tahun_terbit = $_POST['tahun_terbit'];
                            $query = mysqli_query($koneksi, "INSERT INTO buku(id_kategori,judul,penulis,penerbit,tahun_terbit) VALUES('$id_kategori','$judul','$penulis','$penerbit','$tahun_terbit')");

                            if($query) {
                                echo '<script>alert("Oke sip.");</script>';
                            }else{
                                echo '<script>alert("Ulangi.");</script>';
                            }
                        }

                    ?>
                    <div class="row mb-3">
                        <div class="col-md-2">Nama Kategori</div>
                        <div class="col-md-8">
                            <select name="id_kategori" class="form-control">
                                <?php
                                    $kat = mysqli_query($koneksi, "SELECT * FROM kategori");
                                    while($kategori = mysqli_fetch_array($kat)) {
                                        ?>
                                        <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
                                        <?php
                                    }
                                ?>
                            </select></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Judul</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="judul"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Penulis</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="penulis"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Penerbit</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="penerbit"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Tahun Terbit</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="tahun_terbit"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=buku" class="btn btn-danger">Kembali</a>
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