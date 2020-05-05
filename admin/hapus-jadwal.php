<?php
if(isset($_GET['id_jadwal'])){
	include '../process/conSQL.php';
    $id_jadwal = $_GET['id_jadwal'];
    $query = "SELECT id_jadwal FROM jadwal WHERE id_jadwal='$id_jadwal'";
    $cek = mysqli_query($con, $query);
	if(mysqli_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$query1 = "DELETE FROM jadwal WHERE id_jadwal='$id_jadwal'";
        $del = mysqli_query($con, $query1);
		if($del){
            echo "<script>alert('Berhasil Hapus Data');window.location='jadwal.php'</script>";	
		}else{
            echo "<script>alert('Gagal Hapus !');history.go(-1);</script>";
		}	
	}
}else{
	echo '<script>window.history.back()</script>';
	
}
?>