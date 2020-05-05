<?php
if(isset($_GET['id_antrian'])){
	include '../process/conSQL.php';
    $id_antrian = $_GET['id_antrian'];
    $query = "SELECT id_antrian FROM antrian WHERE id_antrian='$id_antrian'";
    $cek = mysqli_query($con, $query);
	if(mysqli_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$query1 = "DELETE FROM antrian WHERE id_antrian='$id_antrian'";
        $del = mysqli_query($con, $query1);
		if($del){
            echo "<script>alert('Berhasil Hapus Data');window.location='antrian-all.php'</script>";	
		}else{
            echo "<script>alert('Gagal Hapus !');history.go(-1);</script>";
		}	
	}
}else{
	echo '<script>window.history.back()</script>';
	
}
?>