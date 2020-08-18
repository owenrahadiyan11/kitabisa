<?php
include '../../process/conSQL.php';
$id_jadwal = [$_POST["id_jadwal1"], $_POST["id_jadwal2"], $_POST["id_jadwal3"]];
$id_dokter = $_POST["id_dokter"];
$hari = [$_POST["hari1"], $_POST["hari2"], $_POST["hari3"]];
$tgl = [$_POST["tgl1"], $_POST["tgl2"], $_POST["tgl3"]];
$jam_awal = [$_POST["jam_awal1"], $_POST["jam_awal2"], $_POST["jam_awal3"]];
$jam_akhir = [$_POST["jam_akhir1"], $_POST["jam_akhir2"], $_POST["jam_akhir3"]];

// menampilkan isi array dengan perulangan for
for($i=0; $i < 3; $i++){
	$query = "INSERT into jadwal values ('".$id_jadwal[$i]."','".$id_dokter."','".$hari[$i]."','".$tgl[$i]."','".$jam_awal[$i]."','".$jam_akhir[$i]."')";
	if(mysqli_query($con, $query)){
		echo "<script>alert('Berhasil Tambah Data');window.location='../jadwal.php'</script>";

	}else{
		echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
	}
}


// $query = "INSERT into jadwal values";
// $index = 0;
// foreach($id_jadwal as $id){
 	// $query .= "('".$id."','".$id_dokter[$index]."','".$hari[$index]."','".$tgl[$index]."','".$jam_awal[$index]."','".$jam_akhir[$index]."'),";
// 	$index++;
// }
// $query = substr($query, 0, strlen($query) - 1).";";
// mysqli_query($con, $query);

// echo "<script>alert('Data berhasil disimpan');window.location = '../jadwal.php';</script>";

// $query = "INSERT into jadwal values ('$id_jadwal' ,'$id_dokter' , '$hari', '$tgl', '$jam_awal', '$jam_akhir')";
// if(mysqli_query($con, $query)){
// 	echo "<script>alert('Berhasil Tambah Data');window.location='../jadwal.php'</script>";

// }else{
// 	echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
// }
?>
