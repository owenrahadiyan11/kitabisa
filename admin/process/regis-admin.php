<?php
include '../../process/conSQL.php';
$id_admin=$_POST["id_admin"];
$nama = $_POST["nama"];
$jk = $_POST["jk"];
$alamat = $_POST["alamat"];
$tlp = $_POST["tlp"];

$query = "INSERT into admin values ('$id_admin' , '$nama', '$jk', '$alamat', '$tlp')";
if(mysqli_query($con, $query)){
	echo "<script>alert('Berhasil Tambah Data');window.location='../dataadmin.php'</script>";

}else{
	echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
}
?>