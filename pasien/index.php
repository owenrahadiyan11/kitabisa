<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Klinik Artha Medika Malang</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link rel="icon" type="image/png" href="../image/logo.png">
  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"> <img class="center" src="../image/logo.png" style="width:50px;height:50px;"/>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href=""> 
              <?php
              if(isset($_SESSION['nama_lengkap']))
              {
                echo " " .$_SESSION["nama_lengkap"].'<br/>';
              }                  
              ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="informasi-pasien.php">Informasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">KLINIK ARTHA MEDIKA</h1>
        <h2 class="masthead-subheading mb-0">Medical and Health</h2>
        <h2 class="">Kami menyediakan pelayanan medis bagi warga sekitar kecamatan Lowokwaru.</h2>
        <a href="home-antrian.php" class="btn btn-primary btn-xl rounded-pill mt-5">Registrasi Antrian</a>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/01 (2).jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Tentang Kami</h2>
            <p>Klinik Atrtha Medika Malang merupakan salah satu layanan yang ada di Rumah Sakit Prima Medika yang memberikan pelayanan kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau masyarakat agar tidak terjadi penularan dan komplikasi penyakit, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/02 (2).jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">Pelayanan</h2>
            <p>Pelayanan kami diberikan oleh dokter bersertifikasi dan memenuhi kompetensi dalam bidang masing-masing. Kami juga melayani layanan antrian online agar mempermudah pasien.<br>
              <h5 class="display-5"> Jam Pelayanan</h5>
              <p>Setiap Hari : 07.00 - 21.00 WIB</p>
              <h5 class="display-5">Alamat</h5>
              <p>Jl. Ikan Tombro Barat No.50A, Tunjungsekar, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142</p>
              <h5 class="display-5">Telepon</h5>
              <p>(0341) 7711108</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <footer class="sticky-footer bg-black">
      <div class="container my-auto ">
        <div class="copyright text-center my-auto text-white small ">
          <span>Copyright &copy; Tim Penyusun Sistem Klinik Artha Medika</span>
        </div>
      </div>
    </footer>
    <!-- /.container -->
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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
</body>
</html>
