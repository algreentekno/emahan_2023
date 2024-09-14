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

mysqli_query($koneksi,"INSERT INTO air_minum_kelembagaan (kode_prov
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
        $data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT file FROM air_minum_kelembagaan WHERE Id_air_kelembagaan='$id_kelembagaan'"));
        $foto=$data['file'];
        unlink("../../../../file/$foto"); 
        $acak           = rand(11111111, 99999999);
        $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt      = str_replace('.','',$ImageExt); // Extension
        $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
        move_uploaded_file($_FILES["file"]["tmp_name"], $temp.$NewImageName); // Menyimpan file
        }else{
        
            $sqlg= "SELECT file from air_minum_kelembagaan where Id_air_kelembagaan='$id_kelembagaan' "; 
            $hasilg = mysqli_query($koneksi,$sqlg);
            $dataoutg = mysqli_fetch_array($hasilg);
            $NewImageName=$dataoutg['file'];
        }

        mysqli_query($koneksi,"UPDATE air_minum_kelembagaan set jenis_data='$jenis_data'
        ,nomor_tanggal='$nomor_tanggal'
        ,tahun_data='$tahun_data'
        ,file='$NewImageName'
        where Id_air_kelembagaan='$id_kelembagaan'");

    
}elseif ($module=='kelembagaan' AND $act=='hapus'){

    $id_kelembagaan=$_POST['id'];
    $data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT file FROM air_minum_kelembagaan WHERE Id_air_kelembagaan='$id_kelembagaan'"));
    $foto=$data['file'];
    unlink("../../../../file/$foto"); 
    mysqli_query($koneksi,"DELETE FROM air_minum_kelembagaan where Id_air_kelembagaan='$id_kelembagaan'");


}elseif ($module=='rawan' AND $act=='add'){
    $thn=date("Y");
    $kode_kota=$_POST['kode_kota'];
    $kode_kec = $_POST['kode_kec'];
    $kode_kel = $_POST['kode_kel'];
      
    mysqli_query($koneksi,"INSERT INTO air_minum_rawan_air (kode_prov
    ,kode_kota
    ,kode_kec
    ,kode_kel
    ,tahun_data) values ('18'
,'$kode_kota'
,'$kode_kec'
,'$kode_kel'
,'$thn')");
    

}elseif ($module=='rawan' AND $act=='edit'){

    $kode_kota=$_POST['kode_kota'];
    $kode_kec = $_POST['kode_kec'];
    $kode_kel = $_POST['kode_kel'];
    $id_rawan=$_POST['id_rawan'];
    
        mysqli_query($koneksi,"UPDATE air_minum_rawan_air set kode_kota='$kode_kota'
        ,kode_kec='$kode_kec'
        ,kode_kel='$kode_kel'
        where Id_air_rawan='$id_rawan'");

}elseif ($module=='rawan' AND $act=='hapus'){
    $Id_air_rawan=$_POST['id'];
    mysqli_query($koneksi,"DELETE FROM air_minum_rawan_air where Id_air_rawan='$Id_air_rawan'");

}elseif ($module=='potensi' AND $act=='add'){
  
    $thn=date("Y");

    $temp = "../../../../file/";
    if (!file_exists($temp))
    mkdir($temp);
    $kode_kota=$_POST['kode_kota'];
    $kode_kec=$_POST['kode_kec'];
    $kode_kel=$_POST['kode_kel'];
    $nama_sumber_air=ucfirst($_POST['nama_sumber_air']); 
    $debit=$_POST['debit'];
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    

    $fileupload             = $_FILES['foto']['tmp_name'];
    $ImageName              = $_FILES['foto']['name'];
    $ImageType              = $_FILES['foto']['type'];
    
    $acak           = rand(11111111, 99999999);
    $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
    $ImageExt      = str_replace('.','',$ImageExt); // Extension
    $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
    $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
    
    
    move_uploaded_file($_FILES["foto"]["tmp_name"], $temp.$NewImageName); // Menyimpan file

mysqli_query($koneksi,"INSERT INTO air_minum_potensi_air_baku (kode_prov
,kode_kota
,kode_kec
,kode_kel
,debit
,nama_sumber_air
,foto
,latitude
,longitude
,tahun_data) values ('18'
,'$kode_kota'
,'$kode_kec'
,'$kode_kel'
,'$debit'
,'$nama_sumber_air'
,'$NewImageName'
,'$latitude'
,'$longitude'
,'$thn'
)");   

}elseif ($module=='potensi' AND $act=='edit'){

    $temp = "../../../../file/";
    if (!file_exists($temp))
    mkdir($temp);

    $nama_sumber_air=ucfirst($_POST['nama_sumber_air']); 
    $debit=$_POST['debit'];
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $Id_air_baku=$_POST['id_air_baku'];

    $fileupload             = $_FILES['foto']['tmp_name'];
    $ImageName              = $_FILES['foto']['name'];
    $ImageType              = $_FILES['foto']['type'];

    if($fileupload!=''){
        $data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT foto FROM air_minum_potensi_air_baku WHERE Id_air_baku='$Id_air_baku'"));
        $foto=$data['foto'];
        unlink("../../../../file/$foto"); 
        $acak           = rand(11111111, 99999999);
        $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt      = str_replace('.','',$ImageExt); // Extension
        $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
        move_uploaded_file($_FILES["foto"]["tmp_name"], $temp.$NewImageName); // Menyimpan file
        }else{
        
            $sqlg= "SELECT foto from air_minum_potensi_air_baku where Id_air_baku='$Id_air_baku' "; 
            $hasilg = mysqli_query($koneksi,$sqlg);
            $dataoutg = mysqli_fetch_array($hasilg);
            $NewImageName=$dataoutg['foto'];
        }

        mysqli_query($koneksi,"UPDATE air_minum_potensi_air_baku set debit='$debit'
        ,nama_sumber_air='$nama_sumber_air'
        ,foto='$NewImageName'
        ,latitude='$latitude'
        ,longitude='$longitude'
        where Id_air_baku='$Id_air_baku'");

    
}elseif ($module=='potensi' AND $act=='hapus'){
    $Id_air_baku=$_POST['id'];
    $data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT foto FROM air_minum_potensi_air_baku WHERE Id_air_baku='$Id_air_baku'"));
    $foto=$data['foto'];
    unlink("../../../../file/$foto"); 
    mysqli_query($koneksi,"DELETE FROM air_minum_potensi_air_baku where Id_air_baku='$Id_air_baku'");
}
elseif ($module=='capaian' AND $act=='add'){

    $thn=date('Y');

    $kode_kota=$_POST['kode_kota'];
    $jum_penduduk_kk=$_POST['jump1'];
    $jumlah_penduduk_jiwa=$_POST['jump2'];
    $jumlah_penduduk_pedesaan=$_POST['jump3'];
    $jumlah_penduduk_perkotaan=$_POST['jump4'];
    $capaian_2=$_POST['capai2'];
    $capaian_4=$_POST['capai4'];
    $capaian_6=$_POST['capai6'];
    $capaian_8=$_POST['capai8'];

    $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM air_minum_capaian WHERE kode_kota='$kode_kota' and tahun_data='$thn'");
$jum = mysqli_num_rows($checkRecord11ss);
if($jum>0){

echo 2;

}else{


    mysqli_query($koneksi,"INSERT INTO air_minum_capaian (kode_prov
    ,kode_kota
    ,jum_penduduk_kk
    ,jumlah_penduduk_jiwa
    ,jumlah_penduduk_pedesaan
    ,jumlah_penduduk_perkotaan
    ,capaian_2
    ,capaian_4
    ,capaian_6
    ,capaian_8
    ,tahun_data) values ('18'
,'$kode_kota'
,'$jum_penduduk_kk'
,'$jumlah_penduduk_jiwa'
,'$jumlah_penduduk_pedesaan'
,'$jumlah_penduduk_perkotaan'
,'$capaian_2'
,'$capaian_4'
,'$capaian_6'
,'$capaian_8'
,'$thn')");  
echo 1;
}

}elseif ($module=='capaian' AND $act=='edit'){

    $kode_kota=$_POST['kode_kota'];
    $jum_penduduk_kk=$_POST['jump1'];
    $jumlah_penduduk_jiwa=$_POST['jump2'];
    $jumlah_penduduk_pedesaan=$_POST['jump3'];
    $jumlah_penduduk_perkotaan=$_POST['jump4'];
    $capaian_2=$_POST['capai2'];
    $capaian_4=$_POST['capai4'];
    $capaian_6=$_POST['capai6'];
    $capaian_8=$_POST['capai8'];
    $Id_air_capaian=$_POST['Id_air_capaian'];
    

    mysqli_query($koneksi,"UPDATE air_minum_capaian set jum_penduduk_kk='$jum_penduduk_kk'
    ,jumlah_penduduk_jiwa='$jumlah_penduduk_jiwa'
    ,jumlah_penduduk_pedesaan='$jumlah_penduduk_pedesaan'
    ,jumlah_penduduk_perkotaan='$jumlah_penduduk_perkotaan'
    ,capaian_2='$capaian_2'
    ,capaian_4='$capaian_4'
    ,capaian_6='$capaian_6'
    ,capaian_8='$capaian_8'
    where Id_air_capaian='$Id_air_capaian'");


}elseif ($module=='capianval' AND $act=='validasi'){
    $Id_air_capaian=$_POST['id'];
    $nama=$_SESSION['nama_lengkap'];
    mysqli_query($koneksi,"UPDATE air_minum_capaian set validasi='1'
    ,divalidasi='$nama'
    where Id_air_capaian='$Id_air_capaian'");

}elseif ($module=='spamreg' AND $act=='edit'){

    $temp = "../../../../foto_tempat/";
    if (!file_exists($temp))
    mkdir($temp);

   
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $Id_air_regional=$_POST['Id'];
    
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
        
            $sqlg= "SELECT file from air_minum_regional where Id_air_regional='$Id_air_regional' "; 
            $hasilg = mysqli_query($koneksi,$sqlg);
            $dataoutg = mysqli_fetch_array($hasilg);
            $NewImageName=$dataoutg['foto'];
            
        }

        mysqli_query($koneksi,"UPDATE air_minum_regional set longitude='$longitude'
        ,latitude='$latitude'
        ,foto='$NewImageName'
        where Id_air_regional='$Id_air_regional'");

    
}elseif ($module=='spamkab' AND $act=='edit'){

    $temp = "../../../../foto_tempat/";
    if (!file_exists($temp))
    mkdir($temp);

   
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $Id_air_kabkota=$_POST['Id'];
    
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
        
            $sqlg= "SELECT file from air_minum_kab_kota where Id_air_kabkota='$Id_air_kabkota' "; 
            $hasilg = mysqli_query($koneksi,$sqlg);
            $dataoutg = mysqli_fetch_array($hasilg);
            $NewImageName=$dataoutg['foto'];
            
        }

        mysqli_query($koneksi,"UPDATE air_minum_kab_kota set longitude='$longitude'
        ,latitude='$latitude'
        ,foto='$NewImageName'
        where Id_air_kabkota='$Id_air_kabkota'");

    
}elseif ($module=='spamikk' AND $act=='edit'){

    $temp = "../../../../foto_tempat/";
    if (!file_exists($temp))
    mkdir($temp);

   
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $Id_air_ikk=$_POST['Id'];
    
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
        
            $sqlg= "SELECT file from air_minum_ikk where Id_air_ikk='$Id_air_ikk' "; 
            $hasilg = mysqli_query($koneksi,$sqlg);
            $dataoutg = mysqli_fetch_array($hasilg);
            $NewImageName=$dataoutg['foto'];
            
        }

        mysqli_query($koneksi,"UPDATE air_minum_ikk set longitude='$longitude'
        ,latitude='$latitude'
        ,foto='$NewImageName'
        where Id_air_ikk='$Id_air_ikk'");

    
}elseif ($module=='spamdesa' AND $act=='edit'){

    $temp = "../../../../foto_tempat/";
    if (!file_exists($temp))
    mkdir($temp);

   
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $Id_air_desa=$_POST['Id'];
    
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
        
            $sqlg= "SELECT file from air_minum_pedesaan where Id_air_desa='$Id_air_desa' "; 
            $hasilg = mysqli_query($koneksi,$sqlg);
            $dataoutg = mysqli_fetch_array($hasilg);
            $NewImageName=$dataoutg['foto'];
            
        }

        mysqli_query($koneksi,"UPDATE air_minum_pedesaan set longitude='$longitude'
        ,latitude='$latitude'
        ,foto='$NewImageName'
        where Id_air_desa='$Id_air_desa'");

    
}
?>
<?php
$koneksi->close();
}
?>