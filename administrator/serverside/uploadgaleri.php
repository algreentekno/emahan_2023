<?php
include "../config/koneksi_li.php";
date_default_timezone_set('Asia/Jakarta');
if(!empty($_FILES)){     
   
$uploadDir = "../../img_galeri/";
if (!file_exists($uploadDir))
mkdir($uploadDir);

$rdm=$_GET['rdm'];
$judul=$_GET['judul'];
$idalbum=$_GET['idalbum'];

$fileupload             = $_FILES['file']['tmp_name'];
$ImageName              = $_FILES['file']['name'];
$ImageType              = $_FILES['file']['type'];

$acak           = rand(11111111, 99999999);
$ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
$ImageExt      = str_replace('.','',$ImageExt); // Extension
$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
$NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);

$uploadedFile = $uploadDir.$NewImageName;    
move_uploaded_file($fileupload,$uploadedFile); 

$mysqlInsert = "INSERT INTO galeri_detail (gbr_galeri
,rdm
)VALUES('".$NewImageName."','".$rdm."')";

mysqli_query($koneksi, $mysqlInsert);
}
?>