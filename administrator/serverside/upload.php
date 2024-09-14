<?php
include "../config/koneksi_li.php";
date_default_timezone_set('Asia/Jakarta');
if(!empty($_FILES)){     
   
$uploadDir = "../../foto_tempat/";
if (!file_exists($uploadDir))
mkdir($uploadDir);

$fileupload             = $_FILES['file']['tmp_name'];
$ImageName              = $_FILES['file']['name'];
$ImageType              = $_FILES['file']['type'];

$uploadedFile = $uploadDir.$ImageName;    
move_uploaded_file($fileupload,$uploadedFile); 


}
?>