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
          <a class="nav-link" href="form-antrian.php">Registrasi</a>
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
                  <!-- End of Topbar -->
                  <!-- Begin Page Content -->
                  <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                      <h1 class="h3 mb-0 text-gray-800">Form Registrasi Antrian Online Pasien</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                      <div class="card-body">
                       <form enctype="multipart/form-data" action="./process/regis-pasien.php" method="POST">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
                              <label class="bmd-label-floating">Nama</label>
                              <input type="text" class="form-control" name="nama" id="nama" required="required">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">Tanggal Lahir</label>
                              <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required="required">
                            </div>
                          </div>  

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">Jenis Kelamin</label>
                              <select class="form-control" id="jk" name="jk" >
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                              </select>
                            </div>
                          </div>                   
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="bmd-label-floating">Alamat</label>
                              <textarea class="form-control" rows="5" name="alamat" id="alamat" required="required"></textarea>
                            </div>
                          </div>                    
                        </div>

                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required="required">
                          </div>
                        </div>                   
                      

                      
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Telepon</label>
                            <input type="text" class="form-control" name="tlp" id="tlp" required="required" placeholder="ex. 081000111999">
                          </div>
                        </div> 
                        </div> 

                        <button type="submit" class="btn btn-outline-info ">Simpan</button>
                        <div class="clearfix"></div>
                      </form>
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

    
</div>
</body>
</html>