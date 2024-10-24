<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Daftar Buku</h2>
                           </div>
                        </div>
                     </div>
<div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="table_section padding_infor_info">
                              <a href="?page=fungsi/tambah_buku" class="btn cur-p btn-primary">Tambah</a>
                              <br>
                              <br>
                                 <div class="table-responsive-sm">
                                    <table class="table table-bordered table-striped">
                                       <thead>
                                          <tr>
                                             <th>No</th>
                                             <th>Nama Kategori</th>
                                             <th>Judul</th>
                                             <th>Penulis</th>
                                             <th>Penerbit</th>
                                             <th>Tahun Terbit</th>
                                             <th>Deskripsi</th>
                                             <th>Aksi</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                            <?php
                                            $i =1;
                                                $query = mysqli_query($koneksi, "SELECT * FROM buku LEFT JOIN kategori on buku.id_kategori = kategori.id_kategori");
                                                while($data = mysqli_fetch_array($query)) {
                                                    ?> 
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $data['kategori']; ?></td>
                                            <td><?php echo $data['judul']; ?></td>
                                            <td><?php echo $data['penulis']; ?></td>
                                            <td><?php echo $data['penerbit']; ?></td>
                                            <td><?php echo $data['tahun_terbit']; ?></td>
                                            <td><?php echo $data['deskripsi']; ?></td>
                                            <td>
                                                <a class="btn cur-p btn-secondary" href="?page=fungsi/ubah_buku&&id=<?php echo $data['id_buku']; ?>">Ubah</a>
                                                <a onclick="return confirm('asli bli pen diapus kuh?')" class="btn cur-p btn-danger" href="?page=fungsi/hapus_buku&&id=<?php echo $data['id_buku']; ?>">Hapus</a>
                                            </td>
                                          </tr>
                                          <?php
                                                }
                                                ?>
                                       </tbody>
                                    </table>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>