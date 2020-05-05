<?php
include '../../process/conSQL.php';
$id_medis=$_POST["id_medis"];
$id_pasien = $_POST["id_pasien"];
$id_dokter = $_POST["id_dokter"];
$tgl = $_POST["tgl"];
$tekanan_darah = $_POST["tekanan_darah"];
$tb=$_POST["tb"];
$bb = $_POST["bb"];
$gejala = $_POST["gejala"];
$objek = $_POST["objek"];
$diagnosa = $_POST["diagnosa"];
$tindakan = $_POST["tindakan"];

$query = "UPDATE rekam_medis SET id_pasien = '$id_pasien' , id_dokter = '$id_dokter' , tgl ='$tgl',  tekanan_darah ='$tekanan_darah', tb='$tb', bb='$bb', gejala='$gejala', objek='$objek', diagnosa='$diagnosa', tindakan = '$tindakan' WHERE id_medis ='$id_medis'";
if(mysqli_query($con, $query)){
	echo "<script>alert('Berhasil Update Data');window.location='../datapasien.php'</script>";

}else{
	echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
}
?>