<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Laporan Peminjaman Buku</h2>
                           </div>
                        </div>
                     </div>
<div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="table_section padding_infor_info">
                              <a href="cetak.php" target="_blank" class="btn cur-p btn-primary"><i class="fa fa-print"></i>Cetak</a>
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
                                             <th>Denda</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                            <?php
                                            $i =1;
                                                $query = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user on user.id_user = peminjaman.id_user LEFT JOIN buku on buku.id_buku = peminjaman.id_buku");
                                                while($data = mysqli_fetch_array($query)) {
                                                    ?> 
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['judul']; ?></td>
                                            <td><?php echo $data['tanggal_peminjaman']; ?></td>
                                            <td><?php echo $data['tanggal_pengembalian']; ?></td>
                                            <td><?php echo $data['status_peminjaman']; ?></td>
                                            <td><?php echo $data['denda']; ?></td>
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