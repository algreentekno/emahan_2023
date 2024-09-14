<?php

$db_host01 = "localhost";
$db_user01 = "root";
$db_pass01 = "root";
$db_name01 = "emahan_2023";

$koneksi = mysqli_connect($db_host01, $db_user01, $db_pass01, $db_name01);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}else{
	echo"";
}
?>