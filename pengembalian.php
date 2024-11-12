<?php

// Ambil data peminjaman yang masih dipinjam
$sql = "SELECT p.id_peminjam, p.id_buku, b.judul, p.tanggal_peminjaman, p.tanggal_pengembalian
        FROM peminjaman p
        JOIN buku b ON p.id_buku = b.id_buku
        WHERE p.status_peminjaman = 'dipinjam'";

$result = $koneksi->query($sql);
?>

    <h1>Pengembalian Buku</h1>
    <form action="fungsi/pengembalian_buku.php" method="POST">
        <label for="id_peminjam">Peminjam</label>
        <select name="id_peminjam" id="id_peminjam">
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id_peminjam']."'>".$row['judul']." (Peminjam ID: ".$row['id_peminjam'].")</option>";
            }
            ?>
        </select><br><br>

        <label for="tanggal_kembali">Tanggal Kembali</label>
        <input type="date" name="tanggal_kembali" required><br><br>

        <input type="submit" value="Kembalikan Buku">
    </form>

<?php
$koneksi->close();
?>
