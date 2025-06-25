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
      <title>Garuda Rent | Sewa Mobil Terpercaya</title>
      <meta name="keywords" content="sewa mobil, rental mobil, garuda rent, sewa mobil jakarta, rental mobil murah">
      <meta name="description" content="Garuda Rent menyediakan layanan sewa mobil harian, mingguan, dan bulanan dengan armada terawat dan harga terbaik.">
      <meta name="author" content="Garuda Rent">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="https://placehold.co/32x32/FF6347/FFFFFF?text=G" type="image/gif" />
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
                  <ul class="navbar-nav">
                     <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#armada"> Armada Kami </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#layanan"> Layanan</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link navbar-brand" href="#"> <span><span>Garuda</span>Rent</span></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#tentang-kami"> Tentang Kami</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " href="#kontak">Kontak </a>
                     </li>
                     <!-- Blok Login/Dashboard disisipkan di sini -->
                     <li class="nav-item">
                        @auth
                            <a href="{{ url('/admin') }}" class="nav-link" style="font-weight: bold; color: #fc9d22;">
                                 login
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
      <!-- banner section start --> 
      <div class="banner_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div id="banner_slider" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Sewa Mobil<br> Mudah & Terpercaya</h1>
                              <p class="banner_text">Solusi perjalanan Anda dengan armada terbaik dan layanan profesional. Jelajahi Indonesia dengan nyaman bersama kami.</p>
                              <div class="form-group">
                                 <input type="text" class="update_mail" placeholder="Cari mobil impian Anda..." name="Search here">
                                 <div class="subscribe_bt"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                            <div class="banner_taital_main">
                               <h1 class="banner_taital">Armada Lengkap<br> & Terawat</h1>
                               <p class="banner_text">Dari mobil keluarga hingga mobil mewah, semua armada kami dalam kondisi prima untuk menjamin keamanan dan kenyamanan Anda.</p>
                               <div class="readmore_btn" style="margin-top:20px;"><a href="#armada">Lihat Semua Armada</a></div>
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
                  <div class="banner_img"><img src="{{ asset('images/toyotaalphard.png') }}" alt="Rental Mobil Garuda Rent"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div id="tentang-kami" class="about_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_img"><img src="{{ asset('images/famili.png') }}" alt="famili"></div>
               </div>
               <div class="col-md-6">
                  <h3 class="about_taital">Kenapa Memilih Garuda Rent?</h3>
                  <p class="about_text">Kami lebih dari sekadar penyedia mobil. Kami adalah partner perjalanan Anda yang berkomitmen memberikan pengalaman terbaik dengan tiga pilar utama: Armada Prima, Harga Jujur, dan Proses Cepat.</p>
                  <ul>
                      <li class="about_text_list"><i class="fa fa-check-circle" style="color:#fc9d22;"></i> Armada selalu dalam kondisi terbaik dan bersih.</li>
                      <li class="about_text_list"><i class="fa fa-check-circle" style="color:#fc9d22;"></i> Harga kompetitif tanpa biaya tersembunyi.</li>
                      <li class="about_text_list"><i class="fa fa-check-circle" style="color:#fc9d22;"></i> Proses booking mudah dan layanan pelanggan 24/7.</li>
                  </ul>
                  <div class="readmore_btn"><a href="#kontak">Hubungi Kami<span class="arrow_icon"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- models section start -->
      <div id="armada" class="models_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="models_taital">Armada Pilihan Kami</h1>
               </div>
            </div>
            <div class="models_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="models_img"><img src="{{ asset('images/avanza.png') }}" alt="avanza"></div>
                  </div>
                  <div class="col-md-6">
                     <h3 class="carolo_text"><span class="number_text">01</span> Family MPV</h3>
                     <p class="ullamco_text">Kapasitas hingga 7 penumpang, Toyota Avanza adalah pilihan ideal untuk perjalanan keluarga atau bersama teman. Irit, handal, dan nyaman.</p>
                     <div class="price_main">
                        <p class="price_text"><span style="color: #fc9d22;">Mulai dari</span> Rp 350.000 / hari</p>
                        <div class="read_btn"><a href="#">Booking Sekarang<span class="arrow_icon"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="models_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <h3 class="carolo_text"><span class="number_text">02</span> City Car</h3>
                     <p class="ullamco_text">Lincah menembus kemacetan kota, Honda Brio sangat cocok untuk perjalanan bisnis atau solo traveling. Parkir mudah dan sangat irit bahan bakar.</p>
                     <div class="price_main">
                        <p class="price_text"><span style="color: #fc9d22;">Mulai dari</span> Rp 275.000 / hari</p>
                        <div class="read_btn"><a href="#">Booking Sekarang<span class="arrow_icon"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="models_img"><img src="{{ asset('images/honda.png') }}" alt="honda"></div>
                  </div>
               </div>
            </div>
            <div class="models_section_2">
                <div class="row">
                   <div class="col-md-6">
                      <div class="models_img"><img src="{{ asset('images/fortuner.png') }}" alt="fortuner"></div>
                   </div>
                   <div class="col-md-6">
                      <h3 class="carolo_text"><span class="number_text">03</span> Premium SUV</h3>
                      <p class="ullamco_text">Untuk gaya dan performa maksimal, Toyota Fortuner siap menemani perjalanan bisnis penting atau liburan premium Anda. Tangguh dan berkelas.</p>
                      <div class="price_main">
                         <p class="price_text"><span style="color: #fc9d22;">Mulai dari</span> Rp 1.200.000 / hari</p>
                         <div class="read_btn"><a href="#">Booking Sekarang<span class="arrow_icon"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a></div>
                      </div>
                   </div>
                </div>
             </div>
         </div>
      </div>
      <!-- models section end -->
      <!-- Layanan Section (Replaces Blog Section) -->
      <div id="layanan" class="blog_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="blog_taital">Layanan Terbaik Untuk Anda</h1>
               </div>
            </div>
            <div class="blog_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="blog_img"><img src="{{ asset('images/ima.jpeg') }}" alt="ima"></div>
                     <div class="btn_main">
                        <div class="date_text active"><a href="#">Sewa Harian</a></div>
                     </div>
                     <div class="blog_box">
                        <h3 class="blog_text">Lepas Kunci / Dengan Sopir</h3>
                        <p class="lorem_text">Pilihan sewa fleksibel mulai dari 12 jam atau 24 jam, tersedia dengan sopir profesional atau lepas kunci.</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="blog_img"><img src="{{ asset('images/ba.avif') }}" alt="ba"></div>
                     <div class="btn_main">
                        <div class="date_text active"><a href="#">Antar-Jemput Bandara</a></div>
                     </div>
                     <div class="blog_box">
                        <h3 class="blog_text">Tepat Waktu & Nyaman</h3>
                        <p class="lorem_text">Layanan antar-jemput dari dan ke bandara dengan harga tetap. Tidak perlu khawatir tarif taksi yang mahal.</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="blog_img"><img src="{{ asset('images/da.jpeg') }}" alt="da"></div>
                     <div class="btn_main">
                        <div class="date_text active"><a href="#">Mobil Pernikahan</a></div>
                     </div>
                     <div class="blog_box">
                        <h3 class="blog_text">Momen Tak Terlupakan</h3>
                        <p class="lorem_text">Hadirkan kemewahan di hari spesial Anda. Kami menyediakan mobil premium lengkap dengan dekorasi.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Layanan section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="client_taital">Apa Kata Pelanggan Kami</h1>
                  <p class="client_text">Kepuasan Anda adalah prioritas utama kami.</p>
               </div>
            </div>
            <div class="customer_section_2">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="box_main">
                           <div class="customer_main">
                              <div class="customer_left">
                                 <div class="customer_img"><img src="{{ asset('images/budi.jpeg') }}" alt="budi"></div>
                              </div>
                              <div class="customer_right">
                                 <h3 class="customer_name">Budi Santoso</h3>
                                 <p class="enim_text">"Pelayanannya luar biasa! Mobilnya bersih, wangi, dan dalam kondisi sangat baik. Proses sewanya juga cepat dan tidak ribet. Sangat direkomendasikan untuk perjalanan keluarga di Jakarta!"</p>
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section end -->
      <!-- contact section start -->
      <div id="kontak" class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="contact_taital">Hubungi Kami</h1>
               </div>
            </div>
            <div class="contact_section_2">
               <div class="mail_section map_form_container">
                  <form action="">
                     <input type="text" class="mail_text" placeholder="Nama Anda" name="Name">
                     <input type="text" class="mail_text" placeholder="Nomor Telepon" name="Phone Number"> 
                     <input type="text" class="mail_text" placeholder="Email" name="Email">
                     <textarea class="massage-bt" placeholder="Pesan Anda" rows="5" id="comment" name="Massage"></textarea>
                     <div class="map_btn_main">
                        <div class="send_bt"><a href="#">Kirim Pesan</a></div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="location_main">
               <div class="location_text">
                  <ul>
                     <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">(+62) 812-3456-7890</span></a></li>
                     <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_15">kontak@garudarent.com</span></a></li>
                  </ul>
               </div>
            </div>
            <div class="social_icon">
               <ul>
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2025 Garuda Rent. All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a>.</p>
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
