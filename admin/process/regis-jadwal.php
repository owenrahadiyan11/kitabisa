<?php
include '../../process/conSQL.php';
$id_jadwal=$_POST["id_jadwal"];
$id_dokter=$_POST["id_dokter"];
$hari = $_POST["hari"];
$jam_awal = $_POST["jam_awal"];
$jam_akhir = $_POST["jam_akhir"];
$query = "INSERT into jadwal values ('$id_jadwal' ,'$id_dokter' , '$hari', '$jam_awal', '$jam_akhir')";
if(mysqli_query($con, $query)){
	echo "<script>alert('Berhasil Tambah Data');window.location='../jadwal.php'</script>";

}else{
	echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
}
?>