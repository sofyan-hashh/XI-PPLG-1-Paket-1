<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjam=$id");
?>
 <script>
    alert('aja nyesel yahhh');
    location.href = "index.php?page=peminjaman";
 </script>