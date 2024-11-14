<?php

// Ambil data peminjaman yang masih dipinjam
$sql = "SELECT p.id_peminjam, p.id_buku, b.judul, p.tanggal_peminjaman, p.tanggal_pengembalian
        FROM peminjaman p
        JOIN buku b ON p.id_buku = b.id_buku
        WHERE p.status_peminjaman = 'dipinjam'";

$result = $koneksi->query($sql);

?>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="fungsi/pengembalian_buku.php" method="post">
                    <div class="row mb-3">
                        <div class="col-md-2">Buku yang dipinjam</div>
                        <div class="col-md-8"><select class="form-control" name="id_peminjam" id="id_peminjam">
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['id_peminjam'] . "'>" . $row['judul'] . "</option>";
                                }
                                ?>
                            </select></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Tahun Terbit</div>
                        <div class="col-md-8"><input class="form-control" type="date" name="tanggal_kembali" required></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Kembali Buku</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>