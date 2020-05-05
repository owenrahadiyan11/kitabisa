<?php
include '../../process/conSQL.php';
$id_pasien=$_POST["id_pasien"];
$nama = $_POST["nama"];
$jk = $_POST["jk"];
$alamat = $_POST["alamat"];
$pekerjaan = $_POST["pekerjaan"];
$tlp = $_POST["tlp"];


$query = "UPDATE pasien SET nama ='$nama', jk='$jk', alamat='$alamat', pekerjaan='$pekerjaan', tlp='$tlp' WHERE id_pasien ='$id_pasien'";
if(mysqli_query($con, $query)){
	echo "<script>alert('Berhasil Update Data');window.location='../datapasien.php'</script>";

}else{
	echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
}
?>