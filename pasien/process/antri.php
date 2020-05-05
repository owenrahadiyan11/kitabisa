<?php
include '../../process/conSQL.php';
$id_antrian=$_POST["id_antrian"];
$id_pasien = $_POST["id_pasien"];
$nomor = $_POST["nomor"];
$tgl = $_POST["tgl"];
$status = $_POST["status"];

$query = "INSERT into antrian values ('$id_antrian' , '$id_pasien', '$nomor', '$tgl', '$status')";
if(mysqli_query($con, $query)){
	echo "<script>alert('Berhasil Registrasi Antrian');window.location='../index.php'</script>";

}else{
	echo "<script>alert('Gagal Registrasi!');history.go(-1);</script>";
}
?>