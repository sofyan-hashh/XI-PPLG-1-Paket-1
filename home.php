<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-table yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">
                                       <?php
                                       echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kategori"));
                                       ?>
                                    </p>
                                    <p class="head_couter">Total Kategori</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-book blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">
                                       <?php
                                       echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM buku"));
                                       ?></p>
                                    <p class="head_couter">Total Buku</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-comments green_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">
                                       <?php
                                       echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM ulasan"));
                                       ?></p>
                                    <p class="head_couter">Ulasan</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user red_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">
                                       <?php
                                       echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user"));
                                       ?></p>
                                    <p class="head_couter">User</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="card">
                        <div class="card-body">
                           <table class="table table-bordered">
                              <tr>
                                 <td width="200">Nama</td>
                                 <td width="1">:</td>
                                 <td><?php echo $_SESSION['user']['nama']; ?></td>
                              </tr>
                              <tr>
                                 <td width="100">Level User</td>
                                 <td width="1">:</td>
                                 <td><?php echo $_SESSION['user']['level']; ?></td>
                              </tr>
                              <tr>
                                 <td width="200">Tanggal Login</td>
                                 <td width="1">:</td>
                                 <td><?php echo date('d-m-Y'); ?></td>
                              </tr>
                           </table>
                        </div>
                     </div>