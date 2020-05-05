<?php
include '../../process/conSQL.php';
$id_pasien=$_POST["id_pasien"];
$nama = $_POST["nama"];
$tgl_lahir = $_POST["tgl_lahir"];
$jk = $_POST["jk"];
$alamat = $_POST["alamat"];
$pekerjaan = $_POST["pekerjaan"];
$tlp = $_POST["tlp"];


$query = "INSERT into pasien values ('$id_pasien' , '$nama', '$tgl_lahir', '$jk', '$alamat', '$pekerjaan', '$tlp')";
if(mysqli_query($con, $query)){
	echo "<script>alert('Berhasil Tambah Data');window.location='../datapasien.php'</script>";

}else{
	echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
}
?>