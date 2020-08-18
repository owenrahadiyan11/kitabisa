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
      <a class="navbar-brand" href="#">WELCOME - 
        <?php
        if(isset($_SESSION['nama_lengkap'])){
          echo " " .$_SESSION["nama_lengkap"].'<br/>';
        }?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="informasi-pasien.php">Jadwal Dokter</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="riwayat-antrian.php">Riwayat Antrian</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="bg-primary text-white jumbotron text-center">
     <img class="center" src="../image/logo.png" style="width:100px;height:100px;"/>
     <h1>Selamat Datang di Aplikasi Pendaftaran <br>Pasien Secara Online</h1>
     <p>Sistem Pelayanan Antrian Online</p> 
   </div>
   <div class="container">
    <div class="col-sm-12">
      <h2>Riwayat Antrian Online</h2>
      <!-- Cards container -->
      <div class="container text-center">
        <div class="row">
          <?php
          include '../process/conSQL.php';
          $nama = $_SESSION['nama_lengkap'];
          $query1 = "SELECT * FROM pasien WHERE nama = '$nama'";
          $result = mysqli_query($con, $query1);
          $dat = mysqli_fetch_assoc($result);
          $id_pasien = $dat['id_pasien'];
          $query = "SELECT * FROM antrian WHERE id_pasien = ' $id_pasien' ORDER BY tgl desc";
          $res = mysqli_query($con, $query);
          if(mysqli_num_rows($res) == 0){ 
          }else{  
           while($data = mysqli_fetch_assoc($res)){ 
            echo '<div class="col-lg-4 col-md-6 col-sm-10 pb-4 d-block m-auto">';
            echo '<div class="pricing-item" style="box-shadow: 0px 0px 30px -7px rgba(0,0,0,0.29);">';
            echo '<div class="pt-4 pb-3" style="letter-spacing: 2px">';
            echo '<h4>Nomor Antrian</h4>';
            echo '</div>';
            echo '<div class="pricing-price pb-1 text-primary color-primary-text ">';
            echo '<h1 style="font-weight: 1000; font-size: 3.5em;">';
            echo '<span style="   font-size: 20px;"></span>'.$data['nomor'].'</h1>';
            echo '</div>';
            echo '<div class="pricing-description">';
            echo '<ul class="list-unstyled mt-3 mb-4">';
            echo '<li class="pl-3 pr-3">Tanggal : <b>'.$data['tgl'].'</b></li>';
            $nama_dokter = $data['id_dokter'];
            $nm = "SELECT nama FROM dokter WHERE id_dokter = $nama_dokter  ";
            $result = mysqli_query($con, $nm);
            $dataNm = mysqli_fetch_assoc($result);
            echo '<li class="pl-3 pr-3">Dokter : <b>'.$dataNm['nama'].'</b></li>';
            echo '<li class="pl-3 pr-3">Pukul : <b>'.$data['pukul'].' WIB</b></li>';
            echo '</ul>';
            echo '</div>';
            echo '<div class="pricing-button pb-1">';
            echo '</div>';
            echo '</div>';
            echo '</div>';
          }
        }
        ?>
      </div>
    </div>
  </div>
</div>


<footer class="sticky-footer bg-black">
  <div class="container my-auto ">
    <div class="copyright text-center my-auto text-white small ">
      <span>Copyright &copy; Tim Penyusun Sistem Klinik Artha Medika</span>
    </div>
  </div>
</footer>
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