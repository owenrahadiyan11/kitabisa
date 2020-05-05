<?php
if(isset($_GET['id_user'])){
	include '../process/conSQL.php';
    $id_user = $_GET['id_user'];
    $query = "SELECT id_user FROM user WHERE id_user='$id_user'";
    $cek = mysqli_query($con, $query);
	if(mysqli_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$query1 = "DELETE FROM user WHERE id_user='$id_user'";
        $del = mysqli_query($con, $query1);
		if($del){
            echo "<script>alert('Berhasil Hapus Data');window.location='datauser.php'</script>";	
		}else{
            echo "<script>alert('Gagal Hapus !');history.go(-1);</script>";
		}	
	}
}else{
	echo '<script>window.history.back()</script>';
	
}
?>