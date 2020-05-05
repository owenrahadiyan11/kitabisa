<?php
include '../../process/conSQL.php';
$id_admin=$_POST["id_admin"];
$nama = $_POST["nama"];
$jk = $_POST["jk"];
$alamat = $_POST["alamat"];
$tlp = $_POST["tlp"];

$query = "UPDATE admin SET nama ='$nama', jk='$jk', alamat='$alamat', tlp='$tlp' WHERE id_admin ='$id_admin'";
if(mysqli_query($con, $query)){
	echo "<script>alert('Berhasil Update Data');window.location='../dataadmin.php'</script>";

}else{
	echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
}
?>