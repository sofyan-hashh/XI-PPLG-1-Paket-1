<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Total Kategori</h2>
                           </div>
                        </div>
                     </div>
<div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="table_section padding_infor_info">
                              <a href="?page=fungsi/tambah_kategori" class="btn cur-p btn-primary">Tambah</a>
                              <br>
                              <br>
                                 <div class="table-responsive-sm">
                                    <table class="table table-bordered table-striped">
                                       <thead>
                                          <tr>
                                             <th>No</th>
                                             <th>Nama Kategori</th>
                                             <th>Aksi</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                            <?php
                                            $i =1;
                                                $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                                                while($data = mysqli_fetch_array($query)) {
                                                    ?> 
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $data['kategori']; ?></td>
                                            <td>
                                                <a class="btn btn-info fa fa-edit" href="?page=fungsi/ubah_kategori&&id=<?php echo $data['id_kategori']; ?>"></a>
                                                <a onclick="return confirm('asli bli pen diapus kuh?')" class="btn btn-danger fa fa-trash" href="?page=fungsi/hapus_kategori&&id=<?php echo $data['id_kategori']; ?>"></a>
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