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

if ($module=='pesanval' AND $act=='hapus'){

    $idpesan=$_POST['id'];
    mysqli_query($koneksi,"DELETE From pesan_validasi where Id_pesan='$idpesan'");
}
?>
<?php
$koneksi->close();
}
?>