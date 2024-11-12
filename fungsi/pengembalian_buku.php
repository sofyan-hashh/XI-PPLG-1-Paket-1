<?php
include 'koneksi.php';

// Ambil data dari form
$id_peminjam = $_POST['id_peminjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];

// Ambil tanggal peminjaman dan tanggal pengembalian yang dijadwalkan
$sql = "SELECT p.tanggal_peminjaman, p.tanggal_pengembalian
        FROM peminjaman p
        WHERE p.id_peminjam = ? AND p.status_peminjaman = 'dipinjam'";

$stmt = $koneksi->prepare($sql);
$stmt->bind_param("i", $id_peminjam);
$stmt->execute();
$stmt->bind_result($tanggal_peminjaman, $tanggal_pengembalian);
$stmt->fetch();
$stmt->close();

// Hitung keterlambatan jika ada
$denda = 0;
if ($tanggal_kembali > $tanggal_pengembalian) {
    // Hitung selisih hari keterlambatan
    $tanggal_kembali_timestamp = strtotime($tanggal_kembali);
    $tanggal_pengembalian_timestamp = strtotime($tanggal_pengembalian);
    $selisih_hari = ($tanggal_kembali_timestamp - $tanggal_pengembalian_timestamp) / (60 * 60 * 24);

    // Denda per hari
    $denda_per_hari = 1000;
    $denda = $selisih_hari * $denda_per_hari;
}

// Update status peminjaman, tanggal pengembalian, dan denda
$sql_update = "UPDATE peminjaman 
               SET tanggal_kembali = ?, denda = ?, status_peminjaman = 'dikembalikan'
               WHERE id_peminjam = ? AND status_peminjaman = 'dipinjam'";

$stmt_update = $koneksi->prepare($sql_update);
$stmt_update->bind_param("sdi", $tanggal_kembali, $denda, $id_peminjam);

if ($stmt_update->execute()) {
    echo "Buku berhasil dikembalikan! Denda: Rp " . number_format($denda, 0, ',', '.');
} else {
    echo "Terjadi kesalahan: " . $koneksi->error;
}

$stmt_update->close();
$koneksi->close();
?>
