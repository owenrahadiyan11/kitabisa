<?php
include '../../process/conSQL.php';
$id_antrian=$_POST["id_antrian"];
$id_pasien = $_POST["id_pasien"];
$id_dokter = $_POST["id_dokter"];
$nomor = $_POST["nomor"];
$tgl = $_POST["tgl"];
$pukul = $_POST["pukul"];
$status = $_POST["status"];

$query = "UPDATE antrian SET id_pasien='$id_pasien', id_dokter='$id_dokter', nomor='$nomor', tgl='$tgl',pukul='$pukul', status='$status' WHERE id_antrian ='$id_antrian'";
if(mysqli_query($con, $query)){
	if($status == 'Sudah dilayani'){
		echo "<script>alert('Berhasil Update Data');window.location='../rekammedis.php?id_pasien=$id_pasien&id_antrian=$id_antrian&id_dokter=$id_dokter'</script>";
	}else{
		echo "<script>alert('Berhasil Update Data');window.location='../antrian-no.php'</script>";
	}
	

}else{
	echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
}
?>