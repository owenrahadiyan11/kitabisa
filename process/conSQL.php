<?php
$dbUrl = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "klinik-am";

$con = mysqli_connect($dbUrl,$dbUser,$dbPass,$dbName);
if(!$con){
    die("Connection failed : " .mysqli_connect_error());
}
?>