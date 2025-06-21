<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Garuda Rent</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- font awesome css -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <!-- header section strats -->
      <header class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">

               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav  ">
                     <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#"> Models </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#"> About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link navbar-brand" href="#"> <span><span>Garuda</span>Rent</span></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#"> Price</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#"> Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " href="#">Contact </a>
                     </li>
                     <!-- Blok Login/Dashboard/Register disisipkan di sini -->
                     <li class="nav-item">
                        @auth
                            <a href="{{ url('/admin') }}" class="nav-link" style="font-weight: bold; color: #fc9d22;">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ url('/admin/login') }}" class="nav-link" style="font-weight: bold; color: #fc9d22;">
                                Log in
                            </a>
                        @endauth
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </header>
      <!-- end header section -->
      <!-- ... sisa kode HTML Anda ... -->
      <div class="banner_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div id="banner_slider" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Sewa<br> Mobil Terbaik</h1>
                              <p class="banner_text">Solusi perjalanan Anda dengan armada terbaik dan layanan profesional. Jelajahi Indonesia dengan nyaman bersama kami.</p>
                              <div class="form-group">
                                 <input type="text" class="update_mail" placeholder="Cari mobil..." name="Search here">
                                 <div class="subscribe_bt"><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Armada<br> Lengkap & Terawat</h1>
                              <p class="banner_text">Dari mobil keluarga hingga mobil mewah, semua armada kami dalam kondisi prima untuk menjamin keamanan dan kenyamanan Anda.</p>
                              <div class="form-group">
                                 <input type="text" class="update_mail" placeholder="Cari mobil..." name="Search here">
                                 <div class="subscribe_bt"><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                     <i class="fa fa-angle-left"></i>
                     </a>
                     <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                     <i class="fa fa-angle-right"></i>
                     </a>
                  </div>
               </div>
               <div class="col-md-6 padding_right0">
                  <div class="banner_img"><img src="images/banner-img.png" alt="Banner Mobil"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- ... sisa kode HTML Anda ... -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2025 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a>. Distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
