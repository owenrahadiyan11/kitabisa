<?php
if(isset($_GET['id_dokter'])){
	include '../process/conSQL.php';
    $id_dokter = $_GET['id_dokter'];
    $query = "SELECT id_dokter FROM dokter WHERE id_dokter='$id_dokter'";
    $cek = mysqli_query($con, $query);
	if(mysqli_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$query1 = "DELETE FROM dokter WHERE id_dokter='$id_dokter'";
        $del = mysqli_query($con, $query1);
		if($del){
            echo "<script>alert('Berhasil Hapus Data');window.location='datadokter.php'</script>";	
		}else{
            echo "<script>alert('Gagal Hapus !');history.go(-1);</script>";
		}	
	}
}else{
	echo '<script>window.history.back()</script>';
	
}
?>