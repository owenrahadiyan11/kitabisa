<?php
if(isset($_GET['id_admin'])){
	include '../process/conSQL.php';
    $id_admin = $_GET['id_admin'];
    $query = "SELECT id_admin FROM admin WHERE id_admin='$id_admin'";
    $cek = mysqli_query($con, $query);
	if(mysqli_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$query1 = "DELETE FROM admin WHERE id_admin='$id_admin'";
        $del = mysqli_query($con, $query1);
		if($del){
            echo "<script>alert('Berhasil Hapus Data');window.location='dataadmin.php'</script>";	
		}else{
            echo "<script>alert('Gagal Hapus !');history.go(-1);</script>";
		}	
	}
}else{
	echo '<script>window.history.back()</script>';
	
}
?>