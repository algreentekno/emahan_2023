<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "emahan_2023";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	$statekoneksi='0';
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}else{
	echo"";
	$statekoneksi='1';
}
?>