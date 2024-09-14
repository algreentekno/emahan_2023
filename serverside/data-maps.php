<?php
include "../config/koneksi_li.php";
$kodekota=$_GET['kodekota'];
$kodekec=$_GET['kodekec'];
$kodekel=$_GET['kodekel'];
$tahundata=$_GET['tahun'];
if($kodekota=='00'){
    $sql="and kode_kota in ('18.04','18.01','18.02','18.07','18.03','18.11','18.09','18.13','18.10','18.06','18.05','18.12','18.08','18.71','18.72')";
}else{
if($kodekota!='' AND $kodekec=='' AND $kodekel==''){
    $sql="AND kode_kota='$kodekota'";
}elseif($kodekota!='' AND $kodekec!='' AND $kodekel==''){
    $sql="AND kode_kota='$kodekota' AND kode_kec='$kodekec'";
}elseif($kodekota!='' AND $kodekec!='' AND $kodekel!=''){
    $sql="AND kode_kota='$kodekota' AND kode_kec='$kodekec' AND kode_kel='$kodekel'";
}
}
header('Content-Type: application/json; charset=utf8');
 $sql=" select nama_kk,latitude,longitude,foto from rtlh where sts_penanganan='T' AND tahun_input_data='$_GET[tahun]' $sql ";
 $query=mysqli_query($koneksi, $sql);
 $array=array();
 while($data=mysqli_fetch_assoc($query)) $array[]=$data;
 echo json_encode($array);
?>