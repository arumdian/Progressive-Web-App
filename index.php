<!DOCTYPE html>
<html>
<head>
<title>Beritaku</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="manifest" href="manifest.json">
<style type="text/css">
		.add-to-btn {
			background-color: #FFFFFF; 
			color: black; 
			border: none; 
			outline:none; 
			font-weight: bold; 
			width: 50%; 
			height: 50px; 
			float: right;
		} 
	</style>
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
      </div>	  
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.php" class="logo"><img src="images/logo.jpg" alt=""></a></div>
		  <div class="add-to">
				<button class="add-to-btn">Add to home screen</button>
				<script type="text/javascript">
				let deferredPrompt;
	var div = document.querySelector('.add-to');
	var button = document.querySelector('.add-to-btn');
	div.style.display = 'none';

	window.addEventListener('beforeinstallprompt', (e) => {
	  // Prevent Chrome 67 and earlier from automatically showing the prompt
	  e.preventDefault();
	  // Stash the event so it can be triggered later.
	  deferredPrompt = e;
	  div.style.display = 'block';

	  button.addEventListener('click', (e) => {
	  // hide our user interface that shows our A2HS button
	  div.style.display = 'none';
	  // Show the prompt
	  deferredPrompt.prompt();
	  // Wait for the user to respond to the prompt
	  deferredPrompt.userChoice
	    .then((choiceResult) => {
	      if (choiceResult.outcome === 'accepted') {
	        console.log('User accepted the A2HS prompt');
	      } else {
	        console.log('User dismissed the A2HS prompt');
	      }
	      deferredPrompt = null;
	    });
	});
	});
	</script>

			</div>
		  </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          <li><a href="pages/LihatBerita.php">LIHAT BERITA</a></li>
		  <li><a href="#">TENTANG</a></li>
          <li><a href="#">KONTAK</a></li>
		  <li><a href="pages/login.php">Login</a></li>
		</ul>
      </div>
    </nav>
  </section>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Berita Terbaru</span>
          <ul id="ticker01" class="news_sticker">
            <li><a href="berita1.php"><img src="images/berita1.jpg" alt="">Istana: Ketua KPK Firli Bahuri Harus Lepas Jabatan di Polri</a></li>
            <li><a href="berita2.php"><img src="images/berita2.jpg" alt="">RUU Keamanan Siber dan Perlindungan Data Sulit Dibahas Bareng</a></li>
            <li><a href="berita3.php"><img src="images/berita3.jpg" alt="">KAI Siapkan 13.980 Kursi Kereta Wisata Saat Libur Nataru</a></li>
            <li><a href="berita4.php"><img src="images/berita4.jpg" alt="">Momen Manis Liverpool Lawan Leicester di Boxing Day</a></li>
            <li><a href="berita5.php"><img src="images/berita5.jpg" alt="">Porsi Pangeran Harry-Meghan di Kartu Natal 'Dicuri' Archie</a></li>
            <li><a href="berita6.php"><img src="images/berita6.jpg" alt="">Pencarian Ditunda, Korban Tewas Bus Sriwijaya Capai 28 Orang</a></li>
            <li><a href="berita7.php"><img src="images/berita7.jpg" alt="">Serangan di Burkina Faso, 7 Tentara dan 80 Militan Tewas</a></li>
            <li><a href="berita8.php"><img src="images/berita8.jpg" alt="">Mbappe Tersanjung Diperhatikan Messi</a></li>
            <li><a href="berita9.php"><img src="images/berita9.jpg" alt="">BSSN Imbau Sektor Telko Masuk Daftar Kritikal Infrastruktur</a></li>
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <div class="single_iteam"> <a href="berita/berita1.php"> <img src="images/berita1.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="berita/berita1.php">Istana: Ketua KPK Firli Bahuri Harus Lepas Jabatan di Polri</a></h2>
              <p>Staf Khusus Presiden Bidang Hukum Dini Shanti Purwono mengatakan Ketua Komisi Pemberantasan Korupsi (KPK) Firli Bahuri harus nonaktif...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="berita/berita2.php"> <img src="images/berita2.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="berita/berita2.php">RUU Keamanan Siber dan Perlindungan Data Sulit Dibahas Bareng</a></h2>
              <p>Badan Siber dan Sandi Negara (BSSN) mengungkapkan Rancangan Undang-undang (RUU) Keamanan dan Ketahanan Siber (KKS) serta RUU Perlindungan Data Pribadi...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="berita/berita3.php"> <img src="images/berita3.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="berita/berita3.php">KAI Siapkan 13.980 Kursi Kereta Wisata Saat Libur Nataru</a></h2>
              <p>PT KAI melalui anak usaha mereka PT Kereta Api Pariwisata menyatakan akan menyiapkan sebanyak 13.980 kursi guna menampung lonjakan penumpang selama...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="berita/berita4.php"> <img src="images/berita4.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="berita/berita4.php">Momen Manis Liverpool Lawan Leicester di Boxing Day</a></h2>
              <p> Liverpool memiliki momen manis saat menghadapi Leicester City di laga Boxing Day jelang pertemuan kedua tim di Stadion King Power...</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Terbaru</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              <li>
                <div class="media"> <a href="berita/berita1.php" class="media-left"> <img alt="" src="images/berita1.jpg"> </a>
                  <div class="media-body"> <a href="berita/berita1.php" class="catg_title"> Istana: Ketua KPK Firli Bahuri Harus Lepas Jabatan di Polri</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="berita/berita2.php" class="media-left"> <img alt="" src="images/berita2.jpg"> </a>
                  <div class="media-body"> <a href="berita/berita2.php" class="catg_title"> RUU Keamanan Siber dan Perlindungan Data Sulit Dibahas Bareng</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="berita/berita3.php" class="media-left"> <img alt="" src="images/berita3.jpg"> </a>
                  <div class="media-body"> <a href="berita/berita3.php" class="catg_title"> KAI Siapkan 13.980 Kursi Kereta Wisata Saat Libur Nataru</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="berita/berita4.php" class="media-left"> <img alt="" src="images/berita4.jpg"> </a>
                  <div class="media-body"> <a href="berita/berita4.php" class="catg_title"> Momen Manis Liverpool Lawan Leicester di Boxing Day</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="berita/berita5.php" class="media-left"> <img alt="" src="images/berita5.jpg"> </a>
                  <div class="media-body"> <a href="berita/berita5.php" class="catg_title"> Porsi Pangeran Harry-Meghan di Kartu Natal 'Dicuri' Archie</a> </div>
                </div>
              </li>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>Ekonomi</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                <li>
                  <figure class="bsbig_fig"> <a href="berita/berita3.php" class="featured_img"> <img alt="" src="images/berita3.jpg"> <span class="overlay"></span> </a>
                    <figcaption> <a href="berita/berita3.php">KAI Siapkan 13.980 Kursi Kereta Wisata Saat Libur Nataru</a> </figcaption>
                    <p>PT KAI melalui anak usaha mereka PT Kereta Api Pariwisata menyatakan akan menyiapkan sebanyak 13.980 kursi guna menampung lonjakan penumpang selama...</p>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  <div class="media wow fadeInDown"> <a href="berita/ekonomi1.php" class="media-left"> <img alt="" src="https://akcdn.detik.net.id/visual/2019/03/12/a80c2840-c8da-4c62-b317-5cd6d6c92dac_169.jpeg?w=650"> </a>
                    <div class="media-body"> <a href="berita/ekonomi1.php" class="catg_title"> Boeing Pecat CEO Demi Kembalikan Kepercayaan Pelanggan</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="berita/ekonomi2.php" class="media-left"> <img alt="" src="https://akcdn.detik.net.id/visual/2018/05/30/fd35394c-70a3-4cf0-835f-18c6c7a750bd_169.jpeg?w=650"> </a>
                    <div class="media-body"> <a href="berita/ekonomi2.php" class="catg_title"> Ada 200 Motor Pertamina Siaga Antisipasi Macet di Tol</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="berita/ekonomi3.php" class="media-left"> <img alt="" src="https://akcdn.detik.net.id/visual/2016/11/26/aa44141a-31ee-4f01-b48e-14b1c3092562_169.jpg?w=650"> </a>
                    <div class="media-body"> <a href="berita/ekonomi3.php" class="catg_title"> China Bakal Guyur Dana ke Bank demi Kerek Penyaluran Kredit</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="berita/ekonomi4.php" class="media-left"> <img alt="" src="https://akcdn.detik.net.id/visual/2019/06/29/4a58b234-bb65-41c5-9727-68ad81ca4efc_169.jpeg?w=650"> </a>
                    <div class="media-body"> <a href="berita/ekonomi4.php" class="catg_title"> Dilema Turunkan Batas Nilai Impor Bebas Bea Masuk</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>Galeri</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/berita1.jpg" title=" Ketua Komisi Pemberantasan Korupsi (KPK) Firli Bahuri"> <img src="images/berita1.jpg" alt=""/></a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/berita5.jpg" title="Pangeran Harry-Meghan"> <img src="images/berita5.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/berita8.jpg" title="Kylian Mbappe"> <img src="images/berita8.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href ="https://akcdn.detik.net.id/visual/2019/11/20/2c028976-5f10-4f9e-91cb-bffaf5e1bc62_169.jpeg?w=650" title="Lorenzo"> <img src="https://akcdn.detik.net.id/visual/2019/11/20/2c028976-5f10-4f9e-91cb-bffaf5e1bc62_169.jpeg?w=650" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="https://akcdn.detik.net.id/visual/2017/02/04/d0fe3239-936f-4266-8bc1-0831000aeb8f_169.jpg?w=650" title="Mariah Carey"> <img src="https://akcdn.detik.net.id/visual/2017/02/04/d0fe3239-936f-4266-8bc1-0831000aeb8f_169.jpg?w=650" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="https://akcdn.detik.net.id/visual/2017/12/10/920c3b16-7cd1-43e0-a129-eeb4f815e401_169.jpg?w=650" title="Justin Bieber"> <img src="https://akcdn.detik.net.id/visual/2017/12/10/920c3b16-7cd1-43e0-a129-eeb4f815e401_169.jpg?w=650" alt=""/> </a> </figure>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_post_content">
            <h2><span>Olahraga</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                <li>
                  <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="berita/berita4.php"> <img src="images/berita4.jpg" alt=""> <span class="overlay"></span> </a>
                    <figcaption> <a href="berita/berita4.php">Momen Manis Liverpool Lawan Leicester di Boxing Day</a> </figcaption>
                    <p>Liverpool memiliki momen manis saat menghadapi Leicester City di laga Boxing Day jelang pertemuan kedua tim di Stadion King Power...</p>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  <div class="media wow fadeInDown"> <a href="berita/berita8.php" class="media-left"> <img alt="" src="images/berita8.jpg"> </a>
                    <div class="media-body"> <a href="berita/berita8.php" class="catg_title"> Mbappe Tersanjung Diperhatikan Messi</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="berita/olahraga1.php" class="media-left"> <img alt="" src="https://akcdn.detik.net.id/visual/2019/11/18/b466d5ae-4d1d-4932-9cf4-981c85a4dc5a_169.jpeg?w=650"> </a>
                    <div class="media-body"> <a href="berita/olahraga1.php" class="catg_title"> Lorenzo Bakal Kembali ke Paddock MotoGP</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="berita/olahraga2.php" class="media-left"> <img alt="" src="https://akcdn.detik.net.id/visual/2019/11/20/2c028976-5f10-4f9e-91cb-bffaf5e1bc62_169.jpeg?w=650"> </a>
                    <div class="media-body"> <a href="berita/olahraga2.php" class="catg_title"> Rossi Bukan Rekan Setim Terbaik Pilihan Lorenzo</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="berita/olahraga3.php" class="media-left"> <img alt="" src="https://akcdn.detik.net.id/visual/2019/12/15/c91bb078-ccf4-4d52-b186-ecd1b9dc2e66_169.jpeg?w=650"> </a>
                    <div class="media-body"> <a href="berita/olahraga3.php" class="catg_title"> Hendra Setiawan: Belum Berani Target Emas Olimpiade</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Terpopuler</span></h2>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="pages/berita1.php" class="media-left"> <img alt="" src="images/berita1.jpg"> </a>
                  <div class="media-body"> <a href="pages/berita1.php" class="catg_title"> Istana: Ketua KPK Firli Bahuri Harus Lepas Jabatan di Polri</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/berita3.php" class="media-left"> <img alt="" src="images/berita3.jpg"> </a>
                  <div class="media-body"> <a href="pages/berita3.php" class="catg_title"> KAI Siapkan 13.980 Kursi Kereta Wisata Saat Libur Nataru</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/berita5.php" class="media-left"> <img alt="" src="images/berita5.jpg"> </a>
                  <div class="media-body"> <a href="pages/berita5.php" class="catg_title"> Porsi Pangeran Harry-Meghan di Kartu Natal 'Dicuri' Archie</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/berita7.php" class="media-left"> <img alt="" src="images/berita7.jpg"> </a>
                  <div class="media-body"> <a href="pages/berita7.php" class="catg_title"> Serangan di Burkina Faso, 7 Tentara dan 80 Militan Tewas</a> </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Video</span></h2>
			<div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
			</div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Tautan</span></h2>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="pages/LihatBerita.php">Baca Berita</a></li>
              <li><a href="pages/login.php">Login</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>Ikuti</h2>
			 <div class="social_link">
              <ul class="sociallink_nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Halaman</h2>
            <ul class="tag_nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="pages/login.php">Admin</a></li>
              <li><a href="pages/LihatBerita.php">Berita</a></li>
              <li><a href="#">Kontak</a></li>
              <li><a href="#">Slider</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Tentang</h2>
            <p>Arum Rawining Dian</p>
            <address>
            Universitas AMIKOM Yogyakarta
            </address>
          </div>
        </div>
      </div>
    </div>
   <div class="footer_bottom">
      <p class="copyright">Beritaku | Arum Rawining Dian</p>
    </div>
  </footer>
</div>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>
<script src = "main.js"></script>
</body>
</html>