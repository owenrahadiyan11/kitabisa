<?php
include '../../process/conSQL.php';
$id_user=$_POST["id_user"];
$nama_lengkap = $_POST["nama_lengkap"];
$password = $_POST["password"];
$level = $_POST["level"];
$status = $_POST["status"];

$query = "UPDATE user SET nama_lengkap ='$nama_lengkap', password='$password', level='$level', status='$status' WHERE id_user ='$id_user'";
if(mysqli_query($con, $query)){
	echo "<script>alert('Berhasil Update Data');window.location='../datauser.php'</script>";

}else{
	echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
}
?>