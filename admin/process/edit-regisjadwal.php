<?php
include '../../process/conSQL.php';
$id_jadwal=$_POST["id_jadwal"];
$id_dokter=$_POST["id_dokter"];
$hari = $_POST["hari"];
$jam_awal = $_POST["jam_awal"];
$jam_akhir = $_POST["jam_akhir"];

$query = "UPDATE jadwal SET id_dokter ='$id_dokter', hari='$hari', jam_awal='$jam_awal', jam_akhir='$jam_akhir' WHERE id_jadwal ='$id_jadwal'";
if(mysqli_query($con, $query)){
	echo "<script>alert('Berhasil Update Data');window.location='../jadwal.php'</script>";

}else{
	echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
}
?>