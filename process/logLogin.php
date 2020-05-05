<?php
session_start();
include 'conSQL.php';
$error='';
if(!empty($_POST["nama_lengkap"]) || !empty($_POST["password"])){
    $nama_lengkap = $_POST["nama_lengkap"];
    $password = $_POST["password"];
    $query = "SELECT * FROM user WHERE nama_lengkap='$nama_lengkap' AND password='$password'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_assoc($result);
        $status = $row["status"];
        $level = $row["level"];
        if($status=="Aktif"){
            $row = mysqli_fetch_assoc($result);
                if($level==1){
                    $_SESSION["nama_lengkap"]=$nama_lengkap;
                    $_SESSION["level"]=$level;
                    header("Location:../pasien/index.php");
                }else if($level==2){
                    $_SESSION["nama_lengkap"]=$nama_lengkap;
                    $_SESSION["level"]=$level;
                    header("Location:../admin/index.php");
                }else{
                    $_SESSION["nama_lengkap"]=$nama_lengkap;
                    $_SESSION["level"]=$level;
                    header("Location:../dokter/index.php");
                }
        }else{
           $error = urlencode("Hubungi admin segera!");
           header("Location:../index.php?pesan=$error");
        }
    }else{
        $error = urlencode("Username dan Password Salah!");
        header("Location:../index.php?pesan=$error");
    }
mysqli_close($con);
}else{
    echo "masuk";
    die();
    $error=urlencode("No pegawai atau password kosong!");
    header("Location:../index.php?pesan=$error");
}
?>