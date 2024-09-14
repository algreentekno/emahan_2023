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
$tahun=date('Y');

$module=$_GET['module'];
$act=$_GET['act'];

if ($module=='verifikasi' AND $act=='edit'){

    $ket_verifikasi = $_POST['ket_verifikasi'];
    $Id_rtlh = $_POST['Id_rtlh'];
    
        mysqli_query($koneksi,"UPDATE rtlh SET sts_verifikasi='Y'
        ,ket_verifikasi='$ket_verifikasi'
        ,tahun_verifikasi='$tahun' WHERE Id_rtlh  = '$Id_rtlh'");

    
    
}
?>
<?php
$koneksi->close();
}
?>