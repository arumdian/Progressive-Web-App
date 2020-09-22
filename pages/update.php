<!DOCTYPE html>
<html>
<head>
<title>Beritaku | Pages | Edit Berita</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="../assets/css/font.css">
<link rel="stylesheet" type="text/css" href="../assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="../assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="../assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<link rel="shortcut icon" href="images/favicon.ico">

<!--[if lt IE 9]>
<script src="../assets/js/html5shiv.min.js"></script>
<script src="../assets/js/respond.min.js"></script>
<![endif]-->


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
        <div class="header_bottom">
          <div class="logo_area"><a href="../index.php" class="logo"><img src="../images/logo.jpg" alt=""></a></div>
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
         <li><a href="admin.php">ADMIN</a></li>
		  <li><a href="admin.php">LIHAT BERITA</a></li>
		  <li><a href="../pages/logout.php" onClick="return keluar()">Logout</a></li>
        </ul>
      </div>
    </nav>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="left_content">
          <div class="single_page">
		  <ol class="breadcrumb">
              <li><a href="admin.php">Admin</a></li>
              <li class="active">Edit Berita</li>
            </ol>
			<h1 align="center" class="style1">EDIT BERITA</h1>	
	</section>
<body>
</html>

<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #DA70D6;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

input[type=submit]:hover {
  background-color: #DA70D6;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-15 {
  float: left;
  width: 15%;
  margin-top: 6px;
}

.col-45 {
  float: left;
  width: 45%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-15, .col-45, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>
</head>
<body>
<section id="contentSection">
<?php
error_reporting(0);
require_once('lib/nusoap.php');//Memanggil library NuSOAP
//URL WDSL
$client = new nusoap_client('http://localhost/beritaku/soap/server.php?wsdl', true);
 
$err = $client->getError();
if ($err) {
 echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
}
 //Memilih idBerita yang ingin ditampilkan
$id = $_GET['id'];
$param = array('id'=>$id);
//Menggunakan method "call" untuk memanggil function readbyid
$result = $client->call('readbyid',array($param));
 
if (isset($_POST['submit'])) {
 $param = array('id'=>$id,'judul'=>$_POST['judul'],
 'kategori'=>$_POST['kategori'],'isi'=>$_POST['isi'],
 'gambar'=>$_POST['path']);
 //Menggunakan method "call" untuk memanggil function update
 $result = $client->call('update',array($param));
 if ($result['status'] == 1) {
	 //Menampilkan Pesan
 echo 'Berhasil Update Data';
 }else{
 echo 'Gagal Update Data';
 }
 
 ///////
 $id = $_GET['id'];
 $param = array('id'=>$id);
 $result = $client->call('readbyid',array($param));
}
 
 foreach ($result as $item) {
 echo '<form action="" method="POST">
 <label for="judul">Judul Berita</label>
 <input type="text" id="judul" name="judul" value="'.$item['judul'].'">
 <label for="kategori">Kategori</label>
 <input type="text" id="kategori" name="kategori" value="'.$item['kategori'].'">
<label for="isi">Isi Berita</label>
<textarea id = "isi" name="isi" style="height:200px">'.$item['isi'].'</textarea>
 <label for="gambar">Gambar</label>
 <img src= images/'.$item['gambar'].'>
 <script type="text/javascript">
				function PreviewImage() {
				var oFReader = new FileReader();
				oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

				oFReader.onload = function (oFREvent) {
				document.getElementById("uploadPreview").src = oFREvent.target.result;
				};
				};
				</script>
  <p align="center">GANTI GAMBAR
				<img id="uploadPreview" style="width: 150px; height: 150px;" />
				<input id="uploadImage" type="file" name="path" onchange="PreviewImage();" />
				 
    <input type="submit" name="submit" value="SUBMIT">
 
 
 
</form>';
 }
 
?>
</body>
</html>

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
              <li><a href="../index.php">Home</a></li>
              <li><a href="login.php">Admin</a></li>
              <li><a href="LihatBerita.php">Berita</a></li>
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
<script src="../assets/js/jquery.min.js"></script> 
<script src="../assets/js/wow.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
<script src="../assets/js/slick.min.js"></script> 
<script src="../assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="../assets/js/jquery.newsTicker.min.js"></script> 
<script src="../assets/js/jquery.fancybox.pack.js"></script> 
<script src="../assets/js/custom.js"></script>
</body>
</html>