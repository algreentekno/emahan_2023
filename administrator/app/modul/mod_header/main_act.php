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

if ($module=='header' AND $act=='add'){
  
  $temp = "../../../../img_header/";
  if (!file_exists($temp))
  mkdir($temp);
  
  $judul=ucfirst($_POST['judul']); 
  $alt_gambar=ucfirst($_POST['alt_gambar']);
  

  $fileupload             = $_FILES['gambar']['tmp_name'];
  $ImageName              = $_FILES['gambar']['name'];
  $ImageType              = $_FILES['gambar']['type'];
  
  $acak           = rand(11111111, 99999999);
  $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
  $ImageExt      = str_replace('.','',$ImageExt); // Extension
  $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
  $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
  
  
  move_uploaded_file($_FILES["gambar"]["tmp_name"], $temp.$NewImageName); // Menyimpan file

mysqli_query($koneksi,"INSERT INTO header (judul
,gambar
,alt_gambar) values ('$judul'
,'$NewImageName'
,'$alt_gambar'
)");   

}elseif ($module=='header' AND $act=='edit'){

  $temp = "../../../../img_header/";
  if (!file_exists($temp))
  mkdir($temp);

$judul=ucfirst($_POST['judul']);
$alt_gambar=ucfirst($_POST['alt_gambar']);
$id_header=$_POST['id_header'];
  
  $fileupload             = $_FILES['gambar']['tmp_name'];
  $ImageName              = $_FILES['gambar']['name'];
  $ImageType              = $_FILES['gambar']['type'];


  if($fileupload!=''){
      $data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT gambar FROM header WHERE id_header='$id_header'"));
      $foto=$data['gambar'];
      unlink("../../../../img_header/$foto"); 
      $acak           = rand(11111111, 99999999);
      $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
      $ImageExt      = str_replace('.','',$ImageExt); // Extension
      $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
      $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
      move_uploaded_file($_FILES["gambar"]["tmp_name"], $temp.$NewImageName); // Menyimpan file
      }else{
      
          $sqlg= "SELECT gambar from header where id_header='$id_header' "; 
          $hasilg = mysqli_query($koneksi,$sqlg);
          $dataoutg = mysqli_fetch_array($hasilg);
          $NewImageName=$dataoutg['gambar'];
      }

      mysqli_query($koneksi,"UPDATE header set alt_gambar='$alt_gambar',  gambar='$NewImageName',judul='$judul' where id_header='$id_header'");

  
}elseif ($module=='header' AND $act=='nonaktifkan'){


    $id_header = $_POST['id'];

    $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM header WHERE id_header='$id_header'");
    $jum = mysqli_fetch_array($checkRecord11ss);

    if($jum['aktif']=='Y'){
        $aktif='T';
        $message="Non Aktifkan";
    }else{
        $aktif='Y';
        $message="Aktifkan";
    }

    mysqli_query($koneksi,"UPDATE header SET aktif  = '$aktif'
    WHERE id_header  = '$id_header'");

  echo $message;


}
?>
<?php
$koneksi->close();
}
?>