<?php
include '../../process/conSQL.php';
$id_medis=$_POST["id_medis"];
$id_pasien = $_POST["id_pasien"];
$id_antrian = $_POST["id_antrian"];
$id_dokter = $_POST["id_dokter"];
$tgl = $_POST["tgl"];
$tekanan_darah = $_POST["tekanan_darah"];
$tb=$_POST["tb"];
$bb = $_POST["bb"];
$gejala = $_POST["gejala"];
$objek = $_POST["objek"];
$diagnosa = $_POST["diagnosa"];
$tindakan = $_POST["tindakan"];

$query = "INSERT into rekam_medis values ('$id_medis' , '$id_pasien', '$id_antrian', '$id_dokter', '$tgl', '$tekanan_darah', '$tb' , '$bb', '$gejala', '$objek', '$diagnosa', '$tindakan')";
if(mysqli_query($con, $query)){
	echo "<script>alert('Berhasil Tambah Data');window.location='../antrian-no.php'</script>";

}else{
	echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
}
?>