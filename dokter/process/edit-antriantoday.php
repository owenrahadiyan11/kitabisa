<?php
include '../../process/conSQL.php';
$id_antrian=$_POST["id_antrian"];
$id_pasien = $_POST["id_pasien"];
$nomor = $_POST["nomor"];
$tgl = $_POST["tgl"];
$status = $_POST["status"];

$query = "UPDATE antrian SET id_pasien='$id_pasien', nomor='$nomor', tgl='$tgl', status='$status' WHERE id_antrian ='$id_antrian'";
if(mysqli_query($con, $query)){
	if($status == 'Sudah dilayani'){
		echo "<script>alert('Berhasil Update Data');window.location='../rekammedis.php'</script>";
	}else{
		echo "<script>alert('Berhasil Update Data');window.location='../antrian-today.php'</script>";
	}
	

}else{
	echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
}
?>