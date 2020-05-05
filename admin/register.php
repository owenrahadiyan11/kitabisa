<?php
include '../process/conSQL.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up | Klinik Atrtha Medika Malang</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="../image/logo.png">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body style="background-color: #999999;">	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('img/bg-01.jpg');"></div>
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" enctype="multipart/form-data" action="./process/logRegister.php" method="POST">
					<span class="login100-form-title p-b-59">
					<a href="datauser.php" class="btn-lg"><</a>
						Registrasi Akun
					</span>
					<input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Nama Lengkap</span>
						<input class="input100" type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate ="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" id="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100">
						<span class="label-input100">Level</span>
						<select class="input100" id="level" name="level" class="form-control">
							<?php
							include '../process/conSQL.php';
							$query = "SELECT * from level";
							$res= mysqli_query($con, $query);
							if(mysqli_num_rows($res) > 0){
								while($row = mysqli_fetch_assoc($res)){
									$id= $row['id'];
									$level_name = $row['level_name'];
									echo "<option value=$id>$level_name</option>";
								}
							}else{
								echo "<option>Tidak ditemukan level</option>";
							}
							mysqli_close($con);
							?>
						</select>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100">
						<span class="label-input100">Status</span>
						<select class="input100" id="status" name="status">
							<option>Aktif</option>
							<option>Tidak Aktif</option>
						</select>
						<span class="focus-input100"></span>
					</div>
					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" onclick="myFunction()">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									Show Password
								</span>
							</label>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Sign Up
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript">
		function myFunction() {
			var x = document.getElementById("password");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>
</body>
</html>