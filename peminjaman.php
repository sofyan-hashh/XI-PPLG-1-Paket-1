<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Peminjaman Buku</h2>
                           </div>
                        </div>
                     </div>
<div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="table_section padding_infor_info">
                              <a href="?page=fungsi/tambah_peminjaman" class="btn cur-p btn-primary">Pinjam Buku</a>
                              <br>
                              <br>
                              <div class="table-responsive-sm">
                                    <table class="table table-bordered table-striped">
                                       <thead>
                                          <tr>
                                             <th>No</th>
                                             <th>User</th>
                                             <th>Buku</th>
                                             <th>Tanggal Peminjaman</th>
                                             <th>Tanggal Pengembalian</th>
                                             <th>Status Peminjaman</th>
                                             <th>Aksi</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                            <?php
                                            $i =1;
                                                $query = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user on user.id_user = peminjaman.id_user LEFT JOIN buku on buku.id_buku = peminjaman.id_buku WHERE peminjaman.id_user=" . $_SESSION['user']['id_user']);
                                                while($data = mysqli_fetch_array($query)) {
                                                    ?> 
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['judul']; ?></td>
                                            <td><?php echo $data['tanggal_peminjaman']; ?></td>
                                            <td><?php echo $data['tanggal_pengembalian']; ?></td>
                                            <td><?php echo $data['status_peminjaman']; ?></td>
                                            <td>
                                             <?php
                                                if($data['status_peminjaman'] != 'dikembalikan') {
                                                   ?>
                                                <a class="btn btn-info fa fa-edit" href="?page=fungsi/ubah_peminjaman&&id=<?php echo $data['id_peminjam']; ?>"></a>
                                                <a onclick="return confirm('asli bli pen diapus kuh?')" class="btn btn-danger fa fa-trash" href="?page=fungsi/hapus_peminjaman&&id=<?php echo $data['id_peminjam']; ?>"></a>
                                                <?php
                                                   }
                                                   ?>
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