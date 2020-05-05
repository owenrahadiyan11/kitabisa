<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Klinik Artha Medika</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" type="image/png" href="../image/logo.png">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="../image/logo.png" style="width: 0px; margin-top: 0px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li ><a>
                  <?php
                  $tanggal= mktime(date("m"),date("d"),date("Y"));
                  echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
                  date_default_timezone_set('Asia/Jakarta');
                  $jam=date("H:i");
                  echo "| Pukul : <b>". $jam." "."</b>";
                  $a = date ("H");
                  ?>   
                </a></li>
                <li><a href="#">Hai User -
                  <?php
                  if(isset($_SESSION['nama_lengkap']))
                  {
                    echo " " .$_SESSION["nama_lengkap"].'<br/>';
                  }                  
                  ?></a></li>
                  <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <div class="container">
          <div class="row">
            <div class="banner-info">
              <div class="banner-logo text-center">
                <img src="img/logo.png" class="img-responsive">
              </div>
              <div class="banner-text text-center">
                <h1 class="white">Klinik "Artha Medika"</h1>
                <p>Jl. Ikan Tombro Timur No 50A Malang<br>Telp 082245655070</p>
                <a href="form-antrian.php" class="btn btn-appoint">Registrasi Antrian</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--cta-->
    <section id="cta-1" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="schedule-tab">
            <div class="col-md-6 col-sm-4">
              <div class="medi-info">
                <h3>Tentang Kami</h3>
                <p>Klinik "Artha Medika" yang beroperasi sebagai Family Practice Physician. markas Klinik "Artha Medika" di alamat Jalan Ikan Tombro Barat 50A, 65142 Kota Malang, Indonesia.</p>
              </div>
            </div>
            <div class="col-md-6 col-sm-4 mt-boxy-3">
              <div class="mt-boxy-color"></div>
              <div class="time-info">
                <h3>Jam Pelayanan</h3>
                <p>Setiap Hari : 07.00 - 21.00 WIB</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih Button Logout untuk keluar dari halaman ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-info" href="../index.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!--cta-->
  <!--footer-->
  <footer id="footer">
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            Copyright &copy; Tim Penyusun Sistem Klinik Artha Medika
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  <!-- Logout Modal-->

</body>
</html>
