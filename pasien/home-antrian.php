<?php
session_start();
$now = date("Y-m-d");
if ($_SESSION['date'] < $now){
  $_SESSION['no_antrian'] = 1;
  $_SESSION['date'] = $now;
}

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
      <h2>Antrian Online</h2>
      <form enctype="multipart/form-data" action="./process/antri.php" method="post">
        <div class="form-group">
         <?php
         include '../process/conSQL.php';
         $namapasien = $_SESSION['nama_lengkap'];
         $pas = "SELECT id_pasien FROM pasien WHERE nama = '$namapasien'";
         $result = mysqli_query($con, $pas);
         $dataPas = mysqli_fetch_assoc($result); 
         echo "<label><h5>No. Rekam Medis : A".$dataPas['id_pasien']."</h5></label><br>";  
         ?>     
       </div>
       <div class="form-group">
        <input type="hidden" name="id_antrian" id="id_antrian" value="<?php echo $id_antrian; ?>">
        <?php
        include '../process/conSQL.php';
        $namapasien = $_SESSION['nama_lengkap'];
        $pas = "SELECT id_pasien FROM pasien WHERE nama = '$namapasien'";
        $result = mysqli_query($con, $pas);
        $dataPas = mysqli_fetch_assoc($result);              
        ?>
        <input type="text" name="nama" class="form-control br-radius-zero" id="nama" style="width:600px;" value="<?php echo $namapasien; ?>" readonly />
        <input type="hidden" name="id_pasien" value="<?php echo $dataPas['id_pasien']; ?>" >
      </div>
      <?php 
      $month = date('m');
      $day = date('d');
      $year = date('Y');
      $today = $year . '-' . $month . '-' . $day;
      ?>
      <div class="form-group">
        <input type="date" class="form-control br-radius-zero" name="tgl" id="tgl" style="width:600px;" value="<?php echo $today; ?>" readonly>
        <input type="hidden" name="status" id="status" value="Belum dilayani">
      </div>
      <!-- Cards container -->
      <div class="container text-center">
        <div class="row">
          <!-- Card #1, Starter -->
          <div class="col-lg-4 col-md-6 col-sm-10 pb-4 d-block m-auto">
            <div class="pricing-item" style="box-shadow: 0px 0px 30px -7px rgba(0,0,0,0.29);">
              <!-- card Antrian -->
              <div class="pt-4 pb-3" style="letter-spacing: 2px">
                <h4>Nomor Antrian</h4>
              </div>
              <!-- No Antrians -->
              <div class="pricing-price pb-1 text-primary color-primary-text ">
               <?php
               include '../process/conSQL.php';
               $no = $_SESSION['no_antrian'];
               echo '<h1 style="font-weight: 1000; font-size: 3.5em;">'.$no.'</h1>';
               ?>
               <input type="hidden" name="nomor" id="nomor" value="<?php echo $no; ?>">
             </div>
             <!-- Dokter dan estimasi -->
             <div class="pricing-description">
              <ul class="list-unstyled mt-3 mb-4">
                <li class="pl-3 pr-3">Dilayani oleh dokter</li>
              <?php
              include '../process/conSQL.php';
              $month = date('m');
              $day = date('d');
              $year = date('Y');
              $today = $year . '-' . $month . '-' . $day;
              $jaddok = "SELECT id_dokter FROM jadwal WHERE tgl = '$today'";
              $res = mysqli_query($con, $jaddok);
              $data = mysqli_fetch_assoc($res);
              $dokter = $data['id_dokter'];
              $dok = "SELECT * FROM dokter WHERE id_dokter = '$dokter'";
              $result = mysqli_query($con, $dok);
              $dataDok = mysqli_fetch_assoc($result); 
              $id_dokter= $dataDok['id_dokter'];
              $nama = $dataDok['nama'];
              echo '<li class="pl-3 pr-3"><b>'.$nama.' </b> </li>';
              ?>    
              <input type="hidden" name="id_dokter" id="id_dokter" value="<?php echo $id_dokter; ?>">

              <?php
              include '../process/conSQL.php';
              $no = $_SESSION['no_antrian'];
              $jad = "SELECT * FROM jadwal WHERE tgl = '$today'";
              $result = mysqli_query($con, $jad);
              $dataD = mysqli_fetch_assoc($result);   
              $jam = $dataD['jam_awal'];
              $minute = $no - 1;
              $min = $minute * 20;
              $time = "+$min minutes";
              $jamT = strtotime($jam);
              $pukul = date("H:i", strtotime($time, $jamT));
              echo '<li class="pl-3 pr-3">Pukul : <b>'.$pukul.' WIB</b> </li>';
              ?>    
              <input type="hidden" name="pukul" id="pukul" value="<?php echo $pukul; ?>">
            </ul>
          </div>
          <!-- Button -->
          <div class="form-action pb-4">
            <button type="submit" class="btn btn-lg btn-primary w-75">Registrasi</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</div>
</div>
</div> 
<footer class="sticky-footer bg-white">
  <div class="container my-auto ">
    <div class="copyright text-center my-auto text-white small ">
      <span>.</span>
    </div>
  </div>

</footer>  
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
