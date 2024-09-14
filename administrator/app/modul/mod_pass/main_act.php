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

if($module=='pass' AND $act=='edit'){
    $username = $_POST['username'];
    $myPassword = $_POST['myPassword'];
    $encr=md5($myPassword);

    mysqli_query($koneksi,"UPDATE user SET password  = '$encr'
    WHERE username   = '$username'");

}
?>
<?php
$koneksi->close();
}
?>    