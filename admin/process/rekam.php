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
$nama_file = $_FILES["gambar"]["name"];
$ukuran_file = $_FILES["gambar"]["size"];
$tipe_file = $_FILES["gambar"]["type"];
$tmp_file = $_FILES["gambar"]["tmp_name"];

$path = "images/".$nama_file;

if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ 
	if($ukuran_file <= 1000000){ 
		if(move_uploaded_file($tmp_file, $path)){ 
			$query = "INSERT into rekam_medis values ('$id_medis' , '$id_pasien', '$id_antrian', '$id_dokter', '$tgl', '$tekanan_darah', '$tb' , '$bb', '$gejala', '$objek', '$diagnosa', '$tindakan', '$ukuran_file', '$tipe_file', '$nama_file')";
			$sql = mysqli_query($con, $query); 
			if($sql){ 
				echo "<script>alert('Berhasil Tambah Data');window.location='../antrian-no.php'</script>"; 
			}else{
				echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database!');history.go(-1);</script>";
			}
		}else{
			echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
		}
	}else{
		echo "<script>alert('Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB!');history.go(-1);</script>";
	}
}else{
	echo "<script>alert('Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG!');history.go(-1);</script>";
}



// $query = "INSERT into rekam_medis values ('$id_medis' , '$id_pasien', '$id_antrian', '$id_dokter', '$tgl', '$tekanan_darah', '$tb' , '$bb', '$gejala', '$objek', '$diagnosa', '$tindakan', '$ukuran_file','$tipe_file','$nama_file')";
// if(mysqli_query($con, $query)){
// 	echo "<script>alert('Berhasil Tambah Data');window.location='../antrian-no.php'</script>";

// }else{
// 	echo "<script>alert('Gagal Tambah Data!');history.go(-1);</script>";
// }
?>