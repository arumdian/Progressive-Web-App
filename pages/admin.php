<!DOCTYPE html>
<html>
<head>
<title>Beritaku | Pages | Admin Page</title>
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
		  <li><a href="create.php">UPLOAD BERITA</a></li>
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
           <div id="wrapper">
	<div id="header">
    <h1 align="center" class="style1">DAFTAR BERITA<br><br>
	</h1>
    </div>        
<body>
</html>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 90%;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #DA70D6;
  color: white;
}
</style>
</head>
<body>

<h2></h2>
<p></p>

<div class="container">
<?php
require_once('lib/nusoap.php');
$client = new nusoap_client('http://localhost/beritaku/soap/server.php?wsdl', true);
 
$err = $client->getError();
if ($err) {
 echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
}
 
$param = "";
$result = $client->call('readall',array($param));

 //echo $client->response;
 //echo $client->request;
if (!empty($result)) {
 
 echo "<table border=1>";
 echo "<tr bgcolor='#cccccc'>";
 echo "<th>Judul</th>";
 echo "<th>Kategori</th>";
 echo "<th colspan='3'>Action</th>";
 echo "</tr>";
 foreach ($result as $item) {
 echo "<tr>";
 echo "<td>".$item['judul']."</td>";
 echo "<td>".$item['kategori']."</td>";
 echo "<td><a href='read_admin.php?id=".$item['id']."'>Read</a></td>";
 echo "<td><a href='update.php?id=".$item['id']."'>Edit</a></td>";
 echo "<td><a href='delete.php?id=".$item['id']."'>Delete</a></td>";
 echo "</tr>";
 }
 echo "</table>";
 
}
?>
<br>
</div>
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