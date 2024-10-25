<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Total Ulasan</h2>
                           </div>
                        </div>
                     </div>
<div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="table_section padding_infor_info">
                              <a href="?page=fungsi/tambah_ulasan" class="btn cur-p btn-primary">Tambah</a>
                              <br>
                              <br>
                                 <div class="table-responsive-sm">
                                    <table class="table table-bordered table-striped">
                                       <thead>
                                          <tr>
                                             <th>No</th>
                                             <th>User</th>
                                             <th>Buku</th>
                                             <th>Ulasan</th>
                                             <th>Rating</th>
                                             <th>Aksi</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                            <?php
                                            $i =1;
                                                $query = mysqli_query($koneksi, "SELECT * FROM ulasan LEFT JOIN user on user.id_user = ulasan.id_user LEFT JOIN buku on buku.id_buku = ulasan.id_buku");
                                                while($data = mysqli_fetch_array($query)) {
                                                    ?> 
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['judul']; ?></td>
                                            <td><?php echo $data['ulasan']; ?></td>
                                            <td><?php echo $data['rating']; ?></td>
                                            <td>
                                                <a class="btn cur-p btn-secondary" href="?page=fungsi/ubah_ulasan&&id=<?php echo $data['id_ulasan']; ?>">Ubah</a>
                                                <a onclick="return confirm('asli bli pen diapus kuh?')" class="btn cur-p btn-danger" href="?page=fungsi/hapus_ulasan&&id=<?php echo $data['id_ulasan']; ?>">Hapus</a>
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