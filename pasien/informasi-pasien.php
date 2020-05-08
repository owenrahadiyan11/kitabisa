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

  <title>Klinik Atrtha Medika Malang</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">

</head>
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
  <h1>Selamat Datang di Aplikasi Pendaftaran <br>Pasien Secara Online</h1>
  <p>Sistem Pelayanan Antrian Online</p> 
</div>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">WELCOME</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="#">Registrasi</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="#">Informasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- End of Topbar -->
                  <!-- Begin Page Content -->
                  <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                      <h1 class="h3 mb-0 text-gray-800">Jadwal Praktek Dokter</h1>
                     
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama Dokter</th>
                                <th>Hari</th>
                                <th>Jam Awal</th>
                                <th>Jam Akhir</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              include '../process/conSQL.php';
                              $no = 1;
                              $query = "SELECT * FROM jadwal ORDER BY id_dokter asc";
                              $res = mysqli_query($con, $query);
                              if(mysqli_num_rows($res) == 0){
                                echo '<tr><td colspan="10">Tidak ada data!</td></tr>';
                              }else{  
                               while($data = mysqli_fetch_assoc($res)){ 
                                echo "<tr>";
                                echo "<td>".$no++.".</td>";
                                $nama_dokter = $data['id_dokter'];
                                $nm = "SELECT nama FROM dokter WHERE id_dokter = $nama_dokter  ";
                                $result = mysqli_query($con, $nm);
                                $dataNm = mysqli_fetch_assoc($result);
                                echo "<td>".$dataNm['nama']."</td>";
                                echo "<td>".$data['hari']."</td>";
                                echo "<td>".$data['jam_awal']."</td>";
                                echo '<td>'.$data['jam_akhir'].'</td>';
                                
                                
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