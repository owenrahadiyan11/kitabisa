<?php
include '../process/conSQL.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Klinik Artha Medika</title>
  <!-- Custom fonts for this template-->
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link rel="icon" type="image/png" href="../image/logo.png">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <br>
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          <style>
            .center{margin-left:auto;margin-right:auto;display:block;width:100px}
          </style>
          <img class="center" src="../image/logo.png"/>
        </a>
      </div> 
      <br>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-spinner"></i>
          <span>Antrian Pasien</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="datapasien.php">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Pasien</span></a>
          </li>
          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">
          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
          <!-- Main Content -->
          <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                   <?php
                   $tanggal= mktime(date("m"),date("d"),date("Y"));
                   echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
                   date_default_timezone_set('Asia/Jakarta');
                   $jam=date("H:i");
                   echo '<div class="topbar-divider d-none d-sm-block"></div>';
                   echo "Pukul : <b>". $jam." "."</b>";
                   $a = date ("H");

                   ?>   
                 </a>
               </li>         
               <div class="topbar-divider d-none d-sm-block"></div>
               <!-- Nav Item - User Information -->
               <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hai Dokter - 
                   <?php
                   if(isset($_SESSION['nama_lengkap']))
                   {
                    echo " " .$_SESSION["nama_lengkap"].'<br/>';
                  }                  
                  ?></span>
                  <div class="topbar-divider d-none d-sm-block"></div>
                  <i class="fas fa-fw fa-user-circle"></i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->
          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Data Pasien</h1>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info">List Data Pasien</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>No. Rekmed</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Pekerjaan</th>
                        <th>Telepon</th>
                        <th>Rekam Medis</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include '../process/conSQL.php';
                      $no = 1;
                      $query = "SELECT * FROM pasien ORDER BY nama asc";
                      $res = mysqli_query($con, $query);
                      if(mysqli_num_rows($res) == 0){
                        echo '<tr><td colspan="10">Tidak ada data!</td></tr>';
                      }else{  
                       while($data = mysqli_fetch_assoc($res)){ 
                        echo "<tr>";
                        echo "<td>".$no++.".</td>";
                         echo "<td> A".$data['id_pasien']."</td>";
                        echo "<td>".$data['nama']."</td>";
                        echo "<td>".$data['tgl_lahir']."</td>";
                        echo "<td>".$data['jk']."</td>";
                        echo "<td>".$data['alamat']."</td>";
                        echo '<td>'.$data['pekerjaan'].'</td>';
                        echo "<td>".$data['tlp']."</td>";
                        echo "<td class='td-actions text-center'>";
                        echo "<a class='btn btn-success btn-sm' rel='tooltip' href='rekammedis-tampil.php?id_pasien=".$data["id_pasien"]."'><i class='fas fa-list'></i></a>";
                        echo "</td>";
                        echo '</tr>';
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Tim Penyusun Sistem Klinik Artha Medika</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-info" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
</body>
</html>
