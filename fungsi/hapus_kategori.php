<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori=$id");
?>
 <script>
    Swal.fire({
      title: "Good job!",
      text: "Hapus Kategori Berhasil!",
      icon: "success"
      });
 </script>