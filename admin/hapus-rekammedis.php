<?php
if(isset($_GET['id_medis'])){
	include '../process/conSQL.php';
    $id_medis = $_GET['id_medis'];
    $query = "SELECT id_medis FROM rekam_medis WHERE id_medis='$id_medis'";
    $cek = mysqli_query($con, $query);
	if(mysqli_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$query1 = "DELETE FROM rekam_medis WHERE id_medis='$id_medis'";
        $del = mysqli_query($con, $query1);
		if($del){
            echo "<script>alert('Berhasil Hapus Data');history.go(-1);</script>";	
		}else{
            echo "<script>alert('Gagal Hapus !');history.go(-1);</script>";
		}	
	}
}else{
	echo '<script>window.history.back()</script>';
	
}
?>