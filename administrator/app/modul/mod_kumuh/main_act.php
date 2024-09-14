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

if ($module=='kumuh' AND $act=='edit1'){

    $temp = "../../../../foto_tempat/";
    if (!file_exists($temp))
    mkdir($temp);

    $Id_kumuh_luas=$_POST['Id'];
    
    $fileupload             = $_FILES['file']['tmp_name'];
    $ImageName              = $_FILES['file']['name'];
    $ImageType              = $_FILES['file']['type'];


    if($fileupload!=''){
       
        $acak           = rand(11111111, 99999999);
        $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt      = str_replace('.','',$ImageExt); // Extension
        $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
        move_uploaded_file($_FILES["file"]["tmp_name"], $temp.$NewImageName); // Menyimpan file
        }else{
        
            $sqlg= "SELECT peta_kawasan from kumuh_luas where Id_kumuh_luas='$Id_kumuh_luas' "; 
            $hasilg = mysqli_query($koneksi,$sqlg);
            $dataoutg = mysqli_fetch_array($hasilg);
            $NewImageName=$dataoutg['peta_kawasan'];
            
        }

        mysqli_query($koneksi,"UPDATE kumuh_luas set peta_kawasan='$NewImageName'
        where Id_kumuh_luas='$Id_kumuh_luas'");

    
}elseif ($module=='kumuh' AND $act=='edit2'){

    $temp = "../../../../foto_tempat/";
    if (!file_exists($temp))
    mkdir($temp);

    $Id_kumuh_luas=$_POST['Id'];
    
    $fileupload             = $_FILES['file']['tmp_name'];
    $ImageName              = $_FILES['file']['name'];
    $ImageType              = $_FILES['file']['type'];


    if($fileupload!=''){
       
        $acak           = rand(11111111, 99999999);
        $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt      = str_replace('.','',$ImageExt); // Extension
        $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
        move_uploaded_file($_FILES["file"]["tmp_name"], $temp.$NewImageName); // Menyimpan file
        }else{
        
            $sqlg= "SELECT peta_kawasan from kumuh_luas where Id_kumuh_luas='$Id_kumuh_luas' "; 
            $hasilg = mysqli_query($koneksi,$sqlg);
            $dataoutg = mysqli_fetch_array($hasilg);
            $NewImageName=$dataoutg['peta_kawasan'];
            
        }

        mysqli_query($koneksi,"UPDATE kumuh_luas set peta_kawasan='$NewImageName'
        where Id_kumuh_luas='$Id_kumuh_luas'");

    
}
?>
<?php
$koneksi->close();
}
?>
