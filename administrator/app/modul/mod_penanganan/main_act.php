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

if ($module=='penanganan' AND $act=='edit'){

    $temp = "../../../../foto_tempat/";
    if (!file_exists($temp))
    mkdir($temp);

    $sumber_dana = $_POST['sumber_dana'];
    $Id_rtlh = $_POST['Id_rtlh'];
    $tahun_dibantu =  $_POST['tahun_dibantu'];
    $material_pondasi=$_POST['material_pondasi'];
    $material_kolom=$_POST['material_kolom'];
    $material_rangka_atap=$_POST['material_rangka_atap'];
    $material_plafon=$_POST['material_plafon'];
    $material_balok=$_POST['material_balok'];
    $sloof=$_POST['sloof'];
    $jendela=$_POST['jendela'];
    $ventilasi=$_POST['ventilasi'];
    $kondisi_lantai=$_POST['kondisi_lantai'];
    $material_lantai=$_POST['material_lantai'];
    $kondisi_dinding=$_POST['kondisi_dinding'];
    $material_dinding=$_POST['material_dinding'];
    $kondisi_atap=$_POST['kondisi_atap'];
    $material_atap=$_POST['material_atap'];
    $sumber_air_minum=$_POST['sumber_air_minum'];
    $jarak_tinja=$_POST['jarak_tinja'];
    $jamban=$_POST['jamban'];
    $jenis_kloset=$_POST['jenis_kloset'];
    $jenis_tpa_tinja=$_POST['jenis_tpa_tinja'];
    $no_ktp=$_POST['no_ktp'];

    $fileupload             = $_FILES['gambar']['tmp_name'];
    $ImageName              = $_FILES['gambar']['name'];
    $ImageType              = $_FILES['gambar']['type'];
    
    $acak           = rand(11111111, 99999999);
    $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
    $ImageExt      = str_replace('.','',$ImageExt); // Extension
    $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
    $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);

    
    $fileupload1             = $_FILES['gambar1']['tmp_name'];
    $ImageName1              = $_FILES['gambar1']['name'];
    $ImageType1              = $_FILES['gambar1']['type'];
    
    $acak1           = rand(11111111, 99999999);
    $ImageExt1       = substr($ImageName1, strrpos($ImageName1, '.'));
    $ImageExt1      = str_replace('.','',$ImageExt1); // Extension
    $ImageName1      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName1);
    $NewImageName1   = str_replace(' ', '', $acak1.'.'.$ImageExt1);

    
    $fileupload2             = $_FILES['gambar2']['tmp_name'];
    $ImageName2             = $_FILES['gambar2']['name'];
    $ImageType2              = $_FILES['gambar2']['type'];
    
    $acak2           = rand(11111111, 99999999);
    $ImageExt2       = substr($ImageName2, strrpos($ImageName2, '.'));
    $ImageExt2      = str_replace('.','',$ImageExt2); // Extension
    $ImageName2      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName2);
    $NewImageName2   = str_replace(' ', '', $acak2.'.'.$ImageExt2);
    
    
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $temp.$NewImageName); // Menyimpan file
    move_uploaded_file($_FILES["gambar1"]["tmp_name"], $temp.$NewImageName1); // Menyimpan file
    move_uploaded_file($_FILES["gambar2"]["tmp_name"], $temp.$NewImageName2); // Menyimpan file


        mysqli_query($koneksi,"UPDATE rtlh SET sts_penanganan='Y'
        ,ket_penanganan='DALAM PROSES PENANGANAN'
        ,tahun_penanganan='$tahun_dibantu'
        ,sumber_dana='$sumber_dana'
        ,tahun_dibantu='$tahun_dibantu'
        ,bukti1='$NewImageName'
        ,bukti2='$NewImageName1'
        ,bukti3='$NewImageName2'
        WHERE Id_rtlh  = '$Id_rtlh'");

mysqli_query($koneksi,"INSERT INTO rtlh_penanganan (no_ktp
,material_pondasi
,material_kolom
,material_rangka_atap
,material_plafon
,material_balok
,sloof
,jendela
,ventilasi
,kondisi_lantai
,material_lantai
,kondisi_dinding
,material_dinding
,kondisi_atap
,material_atap
,sumber_air_minum
,jarak_tinja
,jamban
,jenis_kloset
,jenis_tpa_tinja
) values ('$no_ktp'
,'$material_pondasi'
,'$material_kolom'
,'$material_rangka_atap'
,'$material_plafon'
,'$material_balok'
,'$sloof'
,'$jendela'
,'$ventilasi'
,'$kondisi_lantai'
,'$material_lantai'
,'$kondisi_dinding'
,'$material_dinding'
,'$kondisi_atap'
,'$material_atap'
,'$sumber_air_minum'
,'$jarak_tinja'
,'$jamban'
,'$jenis_kloset'
,'$jenis_tpa_tinja'
)");
    
    
}elseif ($module=='bukti' AND $act=='add'){
  
    $temp = "../../../../foto_tempat/";
    if (!file_exists($temp))
    mkdir($temp);
    
 
    $Id_rtlh=$_POST['Id_rtlh'];
    

    $fileupload             = $_FILES['gambar']['tmp_name'];
    $ImageName              = $_FILES['gambar']['name'];
    $ImageType              = $_FILES['gambar']['type'];
    
    $acak           = rand(11111111, 99999999);
    $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
    $ImageExt      = str_replace('.','',$ImageExt); // Extension
    $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
    $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);

    
    $fileupload1             = $_FILES['gambar1']['tmp_name'];
    $ImageName1              = $_FILES['gambar1']['name'];
    $ImageType1              = $_FILES['gambar1']['type'];
    
    $acak1           = rand(11111111, 99999999);
    $ImageExt1       = substr($ImageName1, strrpos($ImageName1, '.'));
    $ImageExt1      = str_replace('.','',$ImageExt1); // Extension
    $ImageName1      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName1);
    $NewImageName1   = str_replace(' ', '', $acak1.'.'.$ImageExt1);

    
    $fileupload2             = $_FILES['gambar2']['tmp_name'];
    $ImageName2             = $_FILES['gambar2']['name'];
    $ImageType2              = $_FILES['gambar2']['type'];
    
    $acak2           = rand(11111111, 99999999);
    $ImageExt2       = substr($ImageName2, strrpos($ImageName2, '.'));
    $ImageExt2      = str_replace('.','',$ImageExt2); // Extension
    $ImageName2      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName2);
    $NewImageName2   = str_replace(' ', '', $acak2.'.'.$ImageExt2);
    
    
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $temp.$NewImageName); // Menyimpan file
    move_uploaded_file($_FILES["gambar1"]["tmp_name"], $temp.$NewImageName1); // Menyimpan file
    move_uploaded_file($_FILES["gambar2"]["tmp_name"], $temp.$NewImageName2); // Menyimpan file

mysqli_query($koneksi,"UPDATE rtlh set bukti1='$NewImageName',bukti2='$NewImageName1',bukti3='$NewImageName2' where Id_rtlh='$Id_rtlh'");   

}elseif ($module=='bukti' AND $act=='edit'){

    $temp = "../../../../foto_tempat/";
    if (!file_exists($temp))
    mkdir($temp);
    

    $Id_rtlh=$_POST['Id_rtlh'];
    
    $fileupload             = $_FILES['gambar']['tmp_name'];
    $ImageName              = $_FILES['gambar']['name'];
    $ImageType              = $_FILES['gambar']['type'];

    $fileupload1             = $_FILES['gambar1']['tmp_name'];
    $ImageName1              = $_FILES['gambar1']['name'];
    $ImageType1              = $_FILES['gambar1']['type'];
    
    $fileupload2             = $_FILES['gambar2']['tmp_name'];
    $ImageName2             = $_FILES['gambar2']['name'];
    $ImageType2              = $_FILES['gambar2']['type'];
    
    if($fileupload!='' AND $fileupload1!='' AND $fileupload2!=''){
        $data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM rtlh WHERE Id_rtlh='$Id_rtlh'"));
        $foto=$data['bukti1'];
        $foto1=$data['bukti2'];
        $foto2=$data['bukti3'];
        unlink("../../../../foto_tempat/$foto");
        unlink("../../../../foto_tempat/$foto1"); 
        unlink("../../../../foto_tempat/$foto2");

        $acak           = rand(11111111, 99999999);
        $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt      = str_replace('.','',$ImageExt); // Extension
        $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
    
        $acak1           = rand(11111111, 99999999);
    $ImageExt1       = substr($ImageName1, strrpos($ImageName1, '.'));
    $ImageExt1      = str_replace('.','',$ImageExt1); // Extension
    $ImageName1      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName1);
    $NewImageName1   = str_replace(' ', '', $acak1.'.'.$ImageExt1);


    $acak2           = rand(11111111, 99999999);
    $ImageExt2       = substr($ImageName2, strrpos($ImageName2, '.'));
    $ImageExt2      = str_replace('.','',$ImageExt2); // Extension
    $ImageName2      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName2);
    $NewImageName2   = str_replace(' ', '', $acak2.'.'.$ImageExt2);
    
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $temp.$NewImageName); // Menyimpan file
    move_uploaded_file($_FILES["gambar1"]["tmp_name"], $temp.$NewImageName1); // Menyimpan file
    move_uploaded_file($_FILES["gambar2"]["tmp_name"], $temp.$NewImageName2); // Menyimpan file
   
    }else{
        
            $sqlg= "SELECT * from rtlh where Id_rtlh='$Id_rtlh' "; 
            $hasilg = mysqli_query($koneksi,$sqlg);
            $dataoutg = mysqli_fetch_array($hasilg);
            $NewImageName=$dataoutg['bukti1'];
            $NewImageName1=$dataoutg['bukti2'];
            $NewImageName2=$dataoutg['bukti3'];
        }

        mysqli_query($koneksi,"UPDATE rtlh set bukti1='$NewImageName',bukti2='$NewImageName1',bukti3='$NewImageName2' where Id_rtlh='$Id_rtlh'");   

    
}
?>
<?php
$koneksi->close();
}
?>