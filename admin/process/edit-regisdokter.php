<?php
include '../../process/conSQL.php';
$id_dokter=$_POST["id_dokter"];
$nama = $_POST["nama"];
$jk = $_POST["jk"];
$alamat = $_POST["alamat"];
$tlp = $_POST["tlp"];
$spesialis = $_POST["spesialis"];

$query = "UPDATE dokter SET nama ='$nama', jk='$jk', alamat='$alamat', tlp='$tlp', spesialis='$spesialis' WHERE id_dokter ='$id_dokter'";
if(mysqli_query($con, $query)){
	echo "<script>alert('Berhasil Update Data');window.location='../datadokter.php'</script>";

}else{
	echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
}
?>