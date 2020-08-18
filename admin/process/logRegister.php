<?php
include '../../process/conSQL.php';
$id_user=$_POST["id_user"];
$nama_lengkap = $_POST["nama_lengkap"];
$password = $_POST["password"];
$level = $_POST["level"];
$status = $_POST["status"];

$query = "INSERT into user values ('$id_user' , '$nama_lengkap', '$password', '$level', '$status')";
if(mysqli_query($con, $query)){

	if($level == '1'){
		echo "<script>alert('Berhasil Tambah Data');window.location='../reg-pasien.php?nama_lengkap=$nama_lengkap'</script>";
	}elseif($level == '2'){
		echo "<script>alert('Berhasil Tambah Data');window.location='../reg-admin.php?nama_lengkap=$nama_lengkap'</script>";
	}
	else{
	echo "<script>alert('Berhasil Tambah Data');window.location='../reg-dokter.php?nama_lengkap=$nama_lengkap'</script>";
	}

}else{
	echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
	}
	?>