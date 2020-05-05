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
              <a class="navbar-brand" href="#"><img src="../image/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>

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
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--cta-->
    <!--contact-->
    <section id="contact" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          </div>

          <div class="col-md-4 col-sm-4">
            <h3>Praktek Dokter</h3>
            <?php
            include '../process/conSQL.php';
            $no = 1;
            $query = "SELECT * FROM jadwal ORDER BY id_dokter asc";
            $res = mysqli_query($con, $query);
            if(mysqli_num_rows($res) == 0){
              echo '<tr><td colspan="10">Tidak ada data!</td></tr>';
            }else{  
             while($data = mysqli_fetch_assoc($res)){ 
              echo "<div class='space'></div>";
              $nama_dokter = $data['id_dokter'];
              $nm = "SELECT nama FROM dokter WHERE id_dokter = $nama_dokter  ";
              $result = mysqli_query($con, $nm);
              $dataNm = mysqli_fetch_assoc($result);
              echo "<p><i class='fa fa-user fa-fw pull-left fa-2x'></i>".$dataNm['nama']."<br>" .$data['hari']. " --- ".$data['jam_awal']." Sampai ".$data['jam_akhir']."</p>";
            }
          }
          ?>
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl">Form Antrian Online</h3>
            <div class="space"></div>
            <form enctype="multipart/form-data" action="./process/antri.php" method="post">
              <div class="form-group">
               <?php
               include '../process/conSQL.php';
               $month = date('m');
               $day = date('d');
               $year = date('Y');
               $today = $year . '-' . $month . '-' . $day;
               
               echo "<label>Nomor Antrian Anda :".$no++."</label>";  
               ?>
               <label>Nomor Antrian Anda : 1</label>
               <input type="hidden" name="nomor" id="nomor" value="1">
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
              <input type="text" name="nama" class="form-control br-radius-zero" id="nama" value="<?php echo $namapasien; ?>" />
              <input type="hidden" name="id_pasien" value="<?php echo $dataPas['id_pasien']; ?>">
            </div>
            <?php 
            $month = date('m');
            $day = date('d');
            $year = date('Y');
            $today = $year . '-' . $month . '-' . $day;
            ?>
            <div class="form-group">
              <input type="date" class="form-control br-radius-zero" name="tgl" id="tgl" value="<?php echo $today; ?>" readonly>
              <input type="hidden" name="status" id="status" value="Belum dilayani">
            </div>
            <div class="form-action">
              <button type="submit" class="btn btn-form">Registrasi</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ contact-->
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
