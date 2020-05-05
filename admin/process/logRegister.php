<?php
include '../../process/conSQL.php';
$id_user=$_POST["id_user"];
$nama_lengkap = $_POST["nama_lengkap"];
$password = $_POST["password"];
$level = $_POST["level"];
$status = $_POST["status"];

$query = "INSERT into user values ('$id_user' , '$nama_lengkap', '$password', '$level', '$status')";
if(mysqli_query($con, $query)){
	echo "<script>alert('Berhasil Tambah Data');window.location='../datauser.php'</script>";

}else{
	echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
}
?>