<?php
include '../../process/conSQL.php';
$id_dokter=$_POST["id_dokter"];
$nama = $_POST["nama"];
$tgl_lahir = $_POST["tgl_lahir"];
$jk = $_POST["jk"];
$alamat = $_POST["alamat"];
$tlp = $_POST["tlp"];
$spesialis = $_POST["spesialis"];

$query = "INSERT into dokter values ('$id_dokter' , '$nama', '$tgl_lahir', '$jk', '$alamat', '$tlp', '$spesialis')";
if(mysqli_query($con, $query)){
	echo "<script>alert('Berhasil Tambah Data');window.location='../datadokter.php'</script>";

}else{
	echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
}
?>