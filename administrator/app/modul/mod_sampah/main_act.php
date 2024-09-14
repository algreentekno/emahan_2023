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

if ($module=='kelembagaan' AND $act=='add'){
  
   

    $temp = "../../../../file/";
    if (!file_exists($temp))
    mkdir($temp);
    
    $jenis_data=ucfirst($_POST['jenis_data']); 
    $nomor_tanggal=$_POST['nomor_tanggal'];
    $tahun_data=$_POST['tahun_data'];
    $kodekota=$_POST['kode_kota'];
    

    $fileupload             = $_FILES['file']['tmp_name'];
    $ImageName              = $_FILES['file']['name'];
    $ImageType              = $_FILES['file']['type'];
    
    $acak           = rand(11111111, 99999999);
    $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
    $ImageExt      = str_replace('.','',$ImageExt); // Extension
    $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
    $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
    
    
    move_uploaded_file($_FILES["file"]["tmp_name"], $temp.$NewImageName); // Menyimpan file

mysqli_query($koneksi,"INSERT INTO sampah_kelembagaan (kode_prov
,kode_kota
,jenis_data
,nomor_tanggal
,tahun_data
,file) values ('18'
,'$kodekota'
,'$jenis_data'
,'$nomor_tanggal'
,'$tahun_data'
,'$NewImageName'
)");   

}elseif ($module=='kelembagaan' AND $act=='edit'){

    $temp = "../../../../file/";
    if (!file_exists($temp))
    mkdir($temp);

    $jenis_data=ucfirst($_POST['jenis_data']); 
    $nomor_tanggal=$_POST['nomor_tanggal'];
    $tahun_data=$_POST['tahun_data'];
    $id_kelembagaan=$_POST['id_kelembagaan'];
    
    $fileupload             = $_FILES['file']['tmp_name'];
    $ImageName              = $_FILES['file']['name'];
    $ImageType              = $_FILES['file']['type'];


    if($fileupload!=''){
        $data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT file FROM sampah_kelembagaan WHERE Id_sampah_kelembagaan='$id_kelembagaan'"));
        $foto=$data['file'];
        unlink("../../../../file/$foto"); 
        $acak           = rand(11111111, 99999999);
        $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt      = str_replace('.','',$ImageExt); // Extension
        $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
        move_uploaded_file($_FILES["file"]["tmp_name"], $temp.$NewImageName); // Menyimpan file
        }else{
        
            $sqlg= "SELECT file from sampah_kelembagaan where Id_sampah_kelembagaan='$id_kelembagaan' "; 
            $hasilg = mysqli_query($koneksi,$sqlg);
            $dataoutg = mysqli_fetch_array($hasilg);
            $NewImageName=$dataoutg['file'];
        }

        mysqli_query($koneksi,"UPDATE sampah_kelembagaan set jenis_data='$jenis_data'
        ,nomor_tanggal='$nomor_tanggal'
        ,tahun_data='$tahun_data'
        ,file='$NewImageName'
        where Id_sampah_kelembagaan='$id_kelembagaan'");

    
}elseif ($module=='kelembagaan' AND $act=='hapus'){

    $id_kelembagaan=$_POST['id'];
    $data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT file FROM sampah_kelembagaan WHERE Id_sampah_kelembagaan='$id_kelembagaan'"));
    $foto=$data['file'];
    unlink("../../../../file/$foto"); 
    mysqli_query($koneksi,"DELETE FROM sampah_kelembagaan where Id_sampah_kelembagaan='$id_kelembagaan'");


}elseif ($module=='capaian' AND $act=='add'){

    $thn=date('Y');

    $kode_kota=$_POST['kode_kota'];
    $capaian_1=$_POST['capai1'];
    $capaian_2=$_POST['capai2'];
    $capaian_3=$_POST['capai3'];
    $capaian_4=$_POST['capai4'];
    $capaian_5=$_POST['capai5'];
    
    $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM sampah_akses WHERE kode_kota='$kode_kota' and tahun_data='$thn'");
$jum = mysqli_num_rows($checkRecord11ss);
if($jum>0){

echo 2;

}else{


    mysqli_query($koneksi,"INSERT INTO sampah_akses (kode_prov
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

}elseif ($module=='capaian' AND $act=='edit'){

    $kode_kota=$_POST['kode_kota'];
    $capaian_1=$_POST['capai1'];
    $capaian_2=$_POST['capai2'];
    $capaian_3=$_POST['capai3'];
    $capaian_4=$_POST['capai4'];
    $capaian_5=$_POST['capai5'];
    $Id_sampah_akses=$_POST['Id_sampah_akses'];
    

    mysqli_query($koneksi,"UPDATE sampah_akses set capaian_1='$capaian_1'
    ,capaian_2='$capaian_2'
    ,capaian_3='$capaian_3'
    ,capaian_4='$capaian_4'
    ,capaian_5='$capaian_5'
    where Id_sampah_akses='$Id_sampah_akses'");


}elseif ($module=='capianval' AND $act=='validasi'){
    $Id_sampah_akses=$_POST['id'];
    $nama=$_SESSION['nama_lengkap'];
    mysqli_query($koneksi,"UPDATE sampah_akses set validasi='1'
    ,divalidasi='$nama'
    where Id_sampah_akses='$Id_sampah_akses'");

}elseif ($module=='tps' AND $act=='edit'){

    $temp = "../../../../foto_tempat/";
    if (!file_exists($temp))
    mkdir($temp);

   
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $Id_sampah_tps=$_POST['Id'];
    
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
        
            $sqlg= "SELECT file from sampah_layanan_tps where Id_sampah_tps='$Id_sampah_tps' "; 
            $hasilg = mysqli_query($koneksi,$sqlg);
            $dataoutg = mysqli_fetch_array($hasilg);
            $NewImageName=$dataoutg['foto'];
            
        }

        mysqli_query($koneksi,"UPDATE sampah_layanan_tps set longitude='$longitude'
        ,latitude='$latitude'
        ,foto='$NewImageName'
        where Id_sampah_tps='$Id_sampah_tps'");

    
}elseif ($module=='tpst' AND $act=='edit'){

    $temp = "../../../../foto_tempat/";
    if (!file_exists($temp))
    mkdir($temp);

   
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $Id_sampah_tpst=$_POST['Id'];
    
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
        
            $sqlg= "SELECT file from sampah_layanan_tpst where Id_sampah_tpst='$Id_sampah_tpst' "; 
            $hasilg = mysqli_query($koneksi,$sqlg);
            $dataoutg = mysqli_fetch_array($hasilg);
            $NewImageName=$dataoutg['foto'];
            
        }

        mysqli_query($koneksi,"UPDATE sampah_layanan_tpst set longitude='$longitude'
        ,latitude='$latitude'
        ,foto='$NewImageName'
        where Id_sampah_tpst='$Id_sampah_tpst'");

    
}elseif ($module=='tpa' AND $act=='edit'){

    $temp = "../../../../foto_tempat/";
    if (!file_exists($temp))
    mkdir($temp);

   
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $Id_sampah_tpa=$_POST['Id'];
    
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
        
            $sqlg= "SELECT file from sampah_layanan_tpa where Id_sampah_tpa='$Id_sampah_tpa' "; 
            $hasilg = mysqli_query($koneksi,$sqlg);
            $dataoutg = mysqli_fetch_array($hasilg);
            $NewImageName=$dataoutg['foto'];
            
        }

        mysqli_query($koneksi,"UPDATE sampah_layanan_tpa set longitude='$longitude'
        ,latitude='$latitude'
        ,foto='$NewImageName'
        where Id_sampah_tpa='$Id_sampah_tpa'");

    
}
?>
<?php
$koneksi->close();
}
?>