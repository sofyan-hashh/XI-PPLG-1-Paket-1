<?php
require 'fungsi/koneksi.php';
if(! isset($_SESSION['user'])) {
   header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Perpustakaan Digital</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="aset/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="aset/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="aset/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="aset/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="aset/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="aset/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="aset/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="aset/css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="aset/images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="aset/images/layout_img/Foto.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6><?php echo $_SESSION['user']['nama'];?></h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="index.php"  aria-expanded="false"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                     </li>
                     <?php
                     if($_SESSION['user']['level'] !='peminjam'){ 
                     ?>
                     <li class="active">
                        <a href="?page=kategori"  aria-expanded="false"><i class="fa fa-table blue2_color"></i> <span>Kategori</span></a>
                     </li>
                     <li class="active">
                        <a href="?page=buku"  aria-expanded="false"><i class="fa fa-book purple_color"></i> <span>Buku</span></a>
                     </li>
                     <?php
                     }else{
                     ?>
                     <li class="active">
                        <a href="?page=peminjaman"  aria-expanded="false"><i class="fa fa-money green_color"></i> <span>Peminjaman</span></a>
                     </li>
                     <?php
                     }
                     ?>
                     <li class="active">
                        <a href="?page=ulasan"  aria-expanded="false"><i class="fa fa-comments purple_color2"></i> <span>Ulasan</span></a>
                     </li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="aset/images/logo/logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge"></span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge"></span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="aset/images/layout_img/Foto.jpg" alt="#" /><span class="name_user"><?php echo $_SESSION['user']['nama'];?></span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="logout.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
                     <?php

                        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
                        if(file_exists($page . '.php')) {
                           include $page .'.php';
                        }else{
                           include '404.php';
                        }
                     ?>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © Perpustakaan Digital 2024<br><br>
                           Dibuat oleh: Isun Dewek
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="aset/js/jquery.min.js"></script>
      <script src="aset/js/popper.min.js"></script>
      <script src="aset/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="aset/js/animate.js"></script>
      <!-- select country -->
      <script src="aset/js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="aset/js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="aset/js/Chart.min.js"></script>
      <script src="aset/js/Chart.bundle.min.js"></script>
      <script src="aset/js/utils.js"></script>
      <script src="aset/js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="aset/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="aset/js/custom.js"></script>
      <script src="aset/js/chart_custom_style1.js"></script>
   </body>
</html>