<?php
session_start();
 if (empty($_SESSION['namausershped']) AND empty($_SESSION['passusershped'])){
    header('location:login');
}
else{

include "../../../config/koneksi_li.php";
include "../../../config/urlsecure.php";
include "../../../config/fungsi_seo.php";
include "../../../config/library.php";

date_default_timezone_set('Asia/Jakarta');
$datetime=date("Y-m-d H:i:s");

$module=$_GET['module'];
$act=$_GET['act'];

if ($module=='tahundata' AND $act=='add'){

    $tahun_data = $_POST['tahun_data'];
    mysqli_query($koneksi,"INSERT INTO tahun_data (tahun_data) values ('$tahun_data')");

}elseif($module=='tahundata' AND $act=='edit'){
    $tahun_data = $_POST['tahun_data'];
    $id_tahun = $_POST['id_tahun'];

    mysqli_query($koneksi,"UPDATE tahun_data SET tahun_data  = '$tahun_data'
    WHERE id_tahun   = '$id_tahun'");

}elseif ($module=='targetlimbah' AND $act=='add'){

    $thn=date('Y');

    $kode_kota=$_POST['kode_kota'];
    
    $capaian_1=$_POST['capai1'];
    $capaian_2=$_POST['capai2'];
    $capaian_3=$_POST['capai3'];
    $capaian_4=$_POST['capai4'];
    $capaian_5=$_POST['capai5'];
    $capaian_6=$_POST['capai6'];

    $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM air_limbah_akses_target WHERE kode_kota='$kode_kota' and tahun_data='$thn'");
$jum = mysqli_num_rows($checkRecord11ss);
if($jum>0){

echo 2;

}else{


    mysqli_query($koneksi,"INSERT INTO air_limbah_akses_target (kode_prov
    ,kode_kota
    ,capaian_1
    ,capaian_2
    ,capaian_3
    ,capaian_4
    ,capaian_5
    ,capaian_6
    ,tahun_data) values ('18'
,'$kode_kota'
,'$capaian_1'
,'$capaian_2'
,'$capaian_3'
,'$capaian_4'
,'$capaian_5'
,'$capaian_6'
,'$thn')");  
echo 1;
}

}elseif ($module=='targetlimbah' AND $act=='edit'){

    $kode_kota=$_POST['kode_kota'];
    $capaian_1=$_POST['capai1'];
    $capaian_2=$_POST['capai2'];
    $capaian_3=$_POST['capai3'];
    $capaian_4=$_POST['capai4'];
    $capaian_5=$_POST['capai5'];
    $capaian_6=$_POST['capai6'];
    $Id_limbahakses=$_POST['Id_limbah_akses_target'];
    

    mysqli_query($koneksi,"UPDATE air_limbah_akses_target set capaian_1='$capaian_1'
    ,capaian_2='$capaian_2'
    ,capaian_3='$capaian_3'
    ,capaian_4='$capaian_4'
    ,capaian_5='$capaian_5'
    ,capaian_6='$capaian_6'
    where Id_limbah_akses_target='$Id_limbahakses'");


}elseif ($module=='targetairminum' AND $act=='add'){

    $thn=date('Y');

    $kode_kota=$_POST['kode_kota'];
    $capaian_1=$_POST['capai1'];
    $capaian_3=$_POST['capai3'];
    $capaian_5=$_POST['capai5'];
    $capaian_7=$_POST['capai7'];
    

    $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM air_minum_capaian_target WHERE kode_kota='$kode_kota' and tahun_data='$thn'");
$jum = mysqli_num_rows($checkRecord11ss);
if($jum>0){

echo 2;

}else{


    mysqli_query($koneksi,"INSERT INTO air_minum_capaian_target (kode_prov
    ,kode_kota
    ,capaian_1
    ,capaian_3
    ,capaian_5
    ,capaian_7
    ,tahun_data) values ('18'
,'$kode_kota'
,'$capaian_1'
,'$capaian_3'
,'$capaian_5'
,'$capaian_7'
,'$thn')");  
echo 1;
}

}elseif ($module=='targetairminum' AND $act=='edit'){

    $kode_kota=$_POST['kode_kota'];
    $capaian_1=$_POST['capai1'];
    $capaian_3=$_POST['capai3'];
    $capaian_5=$_POST['capai5'];
    $capaian_7=$_POST['capai7'];
    
    $Id_air_capaian_target=$_POST['Id_air_capaian_target'];
    

    mysqli_query($koneksi,"UPDATE air_minum_capaian_target set capaian_1='$capaian_1'
    ,capaian_3='$capaian_3'
    ,capaian_5='$capaian_5'
    ,capaian_7='$capaian_7'
    where Id_air_capaian_target='$Id_air_capaian_target'");


}elseif ($module=='targetsampah' AND $act=='add'){

    $thn=date('Y');

    $kode_kota=$_POST['kode_kota'];
    $capaian_1=$_POST['capai1'];
    $capaian_2=$_POST['capai2'];
    $capaian_3=$_POST['capai3'];
    $capaian_4=$_POST['capai4'];
    $capaian_5=$_POST['capai5'];
    
    $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM sampah_akses_target WHERE kode_kota='$kode_kota' and tahun_data='$thn'");
$jum = mysqli_num_rows($checkRecord11ss);
if($jum>0){

echo 2;

}else{


    mysqli_query($koneksi,"INSERT INTO sampah_akses_target (kode_prov
    ,kode_kota
    ,capaian_1
    ,capaian_2
    ,capaian_3
    ,capaian_4
    ,capaian_5
    ,tahun_data) values ('18'
,'$kode_kota'
,'$capaian_1'
,'$capaian_2'
,'$capaian_3'
,'$capaian_4'
,'$capaian_5'
,'$thn')");  
echo 1;
}

}elseif ($module=='targetsampah' AND $act=='edit'){

    $kode_kota=$_POST['kode_kota'];
    $capaian_1=$_POST['capai1'];
    $capaian_2=$_POST['capai2'];
    $capaian_3=$_POST['capai3'];
    $capaian_4=$_POST['capai4'];
    $capaian_5=$_POST['capai5'];
    $Id_sampah_akses_target=$_POST['Id_sampah_akses_target'];
    

    mysqli_query($koneksi,"UPDATE sampah_akses_target set capaian_1='$capaian_1'
    ,capaian_2='$capaian_2'
    ,capaian_3='$capaian_3'
    ,capaian_4='$capaian_4'
    ,capaian_5='$capaian_5'
    where Id_sampah_akses_target='$Id_sampah_akses_target'");


}
?>
<?php
$koneksi->close();
}
?>    