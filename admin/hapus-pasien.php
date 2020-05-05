<?php
if(isset($_GET['id_pasien'])){
	include '../process/conSQL.php';
    $id_pasien = $_GET['id_pasien'];
    $query = "SELECT id_pasien FROM pasien WHERE id_pasien='$id_pasien'";
    $cek = mysqli_query($con, $query);
	if(mysqli_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$query1 = "DELETE FROM pasien WHERE id_pasien='$id_pasien'";
        $del = mysqli_query($con, $query1);
		if($del){
            echo "<script>alert('Berhasil Hapus Data');window.location='datapasien.php'</script>";	
		}else{
            echo "<script>alert('Gagal Hapus !');history.go(-1);</script>";
		}	
	}
}else{
	echo '<script>window.history.back()</script>';
	
}
?>