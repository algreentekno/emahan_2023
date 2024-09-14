<?php
include "../config/koneksi_li.php";
header('Content-Type: application/json; charset=utf8');
 $sql="select * from rtlh where tahun_input_data='$_GET[tahun]' and kode_kota='$_GET[kodekota]' and kode_kec='$_GET[kodekec]' and kode_kel='$_GET[kodekel]'";
 $query=mysqli_query($koneksi, $sql);
 $array=array();
 while($data=mysqli_fetch_assoc($query)) $array[]=$data;
 echo json_encode($array);
?>