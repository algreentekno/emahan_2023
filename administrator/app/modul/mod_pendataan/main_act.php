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
$tahun=date("Y");
$module=$_GET['module'];
$act=$_GET['act'];
$nama=$_SESSION['nama_lengkap'];

if ($module=='pendataan' AND $act=='add'){

$temp = "../../../../foto_tempat/";
if (!file_exists($temp))
mkdir($temp);

$today = date("Ymd"); //untuk mengambil tahun, tanggal dan bulan Hari INI


   //cari id terakhir ditanggal hari ini
    $query1 = "SELECT max(no_urut) as maxID FROM rtlh WHERE no_urut LIKE '$today%'";
    $hasil = mysqli_query($koneksi,$query1);
    $data = mysqli_fetch_array($hasil);
    $idMax = $data['maxID'];

   //setelah membaca id terakhir, lanjut mencari nomor urut id dari id terakhir
    $NoUrut = (int) substr($idMax, 8, 4);
    $NoUrut++; //nomor urut +1
   
   //setelah ketemu id terakhir lanjut membuat id baru dengan format sbb:
    $NewID = $today .sprintf('%04s', $NoUrut);
//$today nanti jadinya misal 20160526 .sprintf('%04s', $NoUrut) urutan id di tanggal hari ini

$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$nama_kk=ucfirst($_POST['nama_kk']);
$no_ktp=$_POST['no_ktp'];
$alamat_rumah=ucfirst($_POST['alamat_rumah']);
$no_hp=$_POST['no_hp'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$pekerjaan=$_POST['pekerjaan'];
$penghasilan=$_POST['penghasilan'];
$sts_kepemilikan_rumah=$_POST['sts_kepemilikan_rumah'];
$aset_rumah=$_POST['aset_rumah'];
$sts_kepemilikan_tanah=$_POST['sts_kepemilikan_tanah'];
$jenis_kawasan=$_POST['jenis_kawasan'];
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
$luas_rumah=$_POST['luas_rumah'];
$jumlah_penghuni=$_POST['jumlah_penghuni'];
$sumber_air_minum=$_POST['sumber_air_minum'];
$jarak_tinja=$_POST['jarak_tinja'];
$jamban=$_POST['jamban'];
$jenis_kloset=$_POST['jenis_kloset'];
$jenis_tpa_tinja=$_POST['jenis_tpa_tinja'];
$kode_kec=$_POST['kode_kec'];
$kode_kel=$_POST['kode_kel'];
$kode_kota=$_POST['kode_kota'];


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
    
      
        $NewImageName="";
        
    }

    $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM rtlh WHERE no_ktp='$no_ktp'");
    $jum = mysqli_num_rows($checkRecord11ss);
    if($jum>0){
    
        echo 2;
        
    }else{

    mysqli_query($koneksi,"INSERT INTO rtlh (no_urut
    ,nama_kk
    ,no_ktp
    ,alamat_rumah
    ,no_hp
    ,jenis_kelamin
    ,pekerjaan
    ,penghasilan
    ,sts_kepemilikan_rumah
    ,aset_rumah
    ,sts_kepemilikan_tanah
    ,jenis_kawasan
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
    ,luas_rumah
    ,jumlah_penghuni
    ,sumber_air_minum
    ,jarak_tinja
    ,jamban
    ,jenis_kloset
    ,jenis_tpa_tinja
    ,longitude
    ,latitude
    ,foto
    ,kode_kec
    ,kode_kel
    ,kode_kota
    ,kode_prov
    ,tgl_input_data
    ,tahun_input_data
    ,nama_pendata) values ('$NewID'
,'$nama_kk'
,'$no_ktp'
,'$alamat_rumah'
,'$no_hp'
,'$jenis_kelamin'
,'$pekerjaan'
,'$penghasilan'
,'$sts_kepemilikan_rumah'
,'$aset_rumah'
,'$sts_kepemilikan_tanah'
,'$jenis_kawasan'
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
,'$luas_rumah'
,'$jumlah_penghuni'
,'$sumber_air_minum'
,'$jarak_tinja'
,'$jamban'
,'$jenis_kloset'
,'$jenis_tpa_tinja'
,'$longitude'
,'$latitude'
,'$NewImageName'
,'$kode_kec'
,'$kode_kel'
,'$kode_kota'
,'18'
,'$datetime'
,'$tahun'
,'$nama')");

echo 1;
    }


}elseif ($module=='pendataan' AND $act=='hapus'){
    $Id_rtlh=$_POST['id'];
    $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM rtlh WHERE Id_rtlh='$Id_rtlh'");
    $jum = mysqli_fetch_array($checkRecord11ss);
    if($jum['sts_verifikasi']=='Y'){
    echo 2;
    }else{
    mysqli_query($koneksi,"DELETE FROM rtlh where Id_rtlh='$Id_rtlh'");
    echo 1;
    }

}elseif ($module=='pendataan' AND $act=='edit'){

    $temp = "../../../../foto_tempat/";
    if (!file_exists($temp))
    mkdir($temp);
    
    
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $nama_kk=ucfirst($_POST['nama_kk']);
    $no_ktp=$_POST['no_ktp'];
    $alamat_rumah=ucfirst($_POST['alamat_rumah']);
    $no_hp=$_POST['no_hp'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $kode_kec=$_POST['kode_kec'];
    $kode_kel=$_POST['kode_kel'];
    $kode_kota=$_POST['kode_kota'];
    $luas_rumah=$_POST['luas_rumah'];
    $jumlah_penghuni=$_POST['jumlah_penghuni'];
    $Id_rtlh=$_POST['Id_rtlh'];


    //============================================================
    $pekerjaan2=$_POST['pekerjaan'];
    if($pekerjaan2==''){
    $pekerjaan=$_POST['pekerjaan1'];    
    }else{
    $pekerjaan=$_POST['pekerjaan'];  
    }

    $penghasilan2=$_POST['penghasilan'];
    if($penghasilan2==''){
        $penghasilan=$_POST['penghasilan1'];    
        }else{
        $penghasilan=$_POST['penghasilan'];  
        }

    $sts_kepemilikan_rumah2=$_POST['sts_kepemilikan_rumah'];
    if($sts_kepemilikan_rumah2==''){
        $sts_kepemilikan_rumah=$_POST['sts_kepemilikan_rumah1'];    
        }else{
        $sts_kepemilikan_rumah=$_POST['sts_kepemilikan_rumah'];  
        }

    $aset_rumah2=$_POST['aset_rumah'];
    if($aset_rumah2==''){
        $aset_rumah=$_POST['aset_rumah1'];    
        }else{
        $aset_rumah=$_POST['aset_rumah'];  
        }

    $sts_kepemilikan_tanah2=$_POST['sts_kepemilikan_tanah'];
    if($sts_kepemilikan_tanah2==''){
        $sts_kepemilikan_tanah=$_POST['sts_kepemilikan_tanah1'];    
        }else{
        $sts_kepemilikan_tanah=$_POST['sts_kepemilikan_tanah'];  
        }

    $jenis_kawasan2=$_POST['jenis_kawasan'];
    if($jenis_kawasan2==''){
        $jenis_kawasan=$_POST['jenis_kawasan1'];    
        }else{
        $jenis_kawasan=$_POST['jenis_kawasan'];  
        }

    $material_pondasi2=$_POST['material_pondasi'];
    if($material_pondasi2==''){
        $material_pondasi=$_POST['material_pondasi1'];    
        }else{
        $material_pondasi=$_POST['material_pondasi'];  
        }

    $material_kolom2=$_POST['material_kolom'];
    if($material_kolom2==''){
        $material_kolom=$_POST['material_kolom1'];    
        }else{
        $material_kolom=$_POST['material_kolom'];  
        }

    $material_rangka_atap2=$_POST['material_rangka_atap'];
    if($material_rangka_atap2==''){
        $material_rangka_atap=$_POST['material_rangka_atap1'];    
        }else{
        $material_rangka_atap=$_POST['material_rangka_atap'];  
        }

    $material_plafon2=$_POST['material_plafon'];
    if($material_plafon2==''){
        $material_plafon=$_POST['material_plafon1'];    
        }else{
        $material_plafon=$_POST['material_plafon'];  
        }

    $material_balok2=$_POST['material_balok'];
    if($material_balok2==''){
        $material_balok=$_POST['material_balok1'];    
        }else{
        $material_balok=$_POST['material_balok'];  
        }

    $sloof2=$_POST['sloof'];
    if($sloof2==''){
        $sloof=$_POST['sloof1'];    
        }else{
        $sloof=$_POST['sloof'];  
        }

    $jendela2=$_POST['jendela'];
    if($jendela2==''){
        $jendela=$_POST['jendela1'];    
        }else{
        $jendela=$_POST['jendela'];  
        }

    $ventilasi2=$_POST['ventilasi'];
    if($ventilasi2==''){
        $ventilasi=$_POST['ventilasi1'];    
        }else{
        $ventilasi=$_POST['ventilasi'];  
        }

    $kondisi_lantai2=$_POST['kondisi_lantai'];
    if($kondisi_lantai2==''){
        $kondisi_lantai=$_POST['kondisi_lantai1'];    
        }else{
        $kondisi_lantai=$_POST['kondisi_lantai'];  
        }

    $material_lantai2=$_POST['material_lantai'];
    if($material_lantai2==''){
        $material_lantai=$_POST['material_lantai1'];    
        }else{
        $material_lantai=$_POST['material_lantai'];  
        }

    $kondisi_dinding2=$_POST['kondisi_dinding'];
    if($kondisi_dinding2==''){
        $kondisi_dinding=$_POST['kondisi_dinding1'];    
        }else{
        $kondisi_dinding=$_POST['kondisi_dinding'];  
        }

    $material_dinding2=$_POST['material_dinding'];
    if($material_dinding2==''){
        $material_dinding=$_POST['material_dinding1'];    
        }else{
        $material_dinding=$_POST['material_dinding'];  
        }

    $kondisi_atap2=$_POST['kondisi_atap'];
    if($kondisi_atap2==''){
        $kondisi_atap=$_POST['kondisi_atap1'];    
        }else{
        $kondisi_atap=$_POST['kondisi_atap'];  
        }

    $material_atap2=$_POST['material_atap'];
    if($material_atap2==''){
        $material_atap=$_POST['material_atap1'];    
        }else{
        $material_atap=$_POST['material_atap'];  
        }

    $sumber_air_minum2=$_POST['sumber_air_minum'];
    if($sumber_air_minum2==''){
        $sumber_air_minum=$_POST['sumber_air_minum1'];    
        }else{
        $sumber_air_minum=$_POST['sumber_air_minum'];  
        }

    $jarak_tinja2=$_POST['jarak_tinja'];
    if($jarak_tinja2==''){
        $jarak_tinja=$_POST['jarak_tinja1'];    
        }else{
        $jarak_tinja=$_POST['jarak_tinja'];  
        }

    $jamban2=$_POST['jamban'];
    if($jamban2==''){
        $jamban=$_POST['jamban1'];    
        }else{
        $jamban=$_POST['jamban'];  
        }

    $jenis_kloset2=$_POST['jenis_kloset'];
    if($jenis_kloset2==''){
        $jenis_kloset=$_POST['jenis_kloset1'];    
        }else{
        $jenis_kloset=$_POST['jenis_kloset'];  
        }

    $jenis_tpa_tinja2=$_POST['jenis_tpa_tinja'];
    if($jenis_tpa_tinja2==''){
        $jenis_tpa_tinja=$_POST['jenis_tpa_tinja1'];    
        }else{
        $jenis_tpa_tinja=$_POST['jenis_tpa_tinja'];  
        }

    //=========================================================
    
    
    
    $fileupload             = $_FILES['file']['tmp_name'];
    $ImageName              = $_FILES['file']['name'];
    $ImageType              = $_FILES['file']['type'];
    
    
    if($fileupload==''){

        $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM rtlh WHERE Id_rtlh='$Id_rtlh'");
        $jum = mysqli_fetch_array($checkRecord11ss);
        $foto=$jum['foto'];
        $NewImageName=$foto;

        }else{
        
            $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM rtlh WHERE Id_rtlh='$Id_rtlh'");
            $jum = mysqli_fetch_array($checkRecord11ss);
            $foto=$jum['foto'];
            unlink("$temp$foto"); 

            $acak           = rand(11111111, 99999999);
            $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt      = str_replace('.','',$ImageExt); // Extension
            $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
            move_uploaded_file($_FILES["file"]["tmp_name"], $temp.$NewImageName); // Menyimpan file
        
          
            
        }
    
       
    
        mysqli_query($koneksi,"UPDATE rtlh set nama_kk='$nama_kk'
        ,alamat_rumah='$alamat_rumah'
        ,no_hp='$no_hp'
        ,jenis_kelamin='$jenis_kelamin'
        ,pekerjaan='$pekerjaan'
        ,penghasilan='$penghasilan'
        ,sts_kepemilikan_rumah='$sts_kepemilikan_rumah'
        ,aset_rumah='$aset_rumah'
        ,sts_kepemilikan_tanah='$sts_kepemilikan_tanah'
        ,jenis_kawasan='$jenis_kawasan'
        ,material_pondasi='$material_pondasi'
        ,material_kolom='$material_kolom'
        ,material_rangka_atap='$material_rangka_atap'
        ,material_plafon='$material_plafon'
        ,material_balok='$material_balok'
        ,sloof='$sloof'
        ,jendela='$jendela'
        ,ventilasi='$ventilasi'
        ,kondisi_lantai='$kondisi_lantai'
        ,material_lantai='$material_lantai'
        ,kondisi_dinding='$kondisi_dinding'
        ,material_dinding='$material_dinding'
        ,kondisi_atap='$kondisi_atap'
        ,material_atap='$material_atap'
        ,luas_rumah='$luas_rumah'
        ,jumlah_penghuni='$jumlah_penghuni'
        ,sumber_air_minum='$sumber_air_minum'
        ,jarak_tinja='$jarak_tinja'
        ,jamban='$jamban'
        ,jenis_kloset='$jenis_kloset'
        ,jenis_tpa_tinja='$jenis_tpa_tinja'
        ,longitude='$longitude'
        ,latitude='$latitude'
        ,foto='$NewImageName' where Id_rtlh='$Id_rtlh'");
    
    }elseif ($module=='rtlhtemp' AND $act=='hapus'){
        $no_ktp=$_POST['id'];
   
        mysqli_query($koneksi,"DELETE FROM rtlh_temp where no_ktp='$no_ktp'");
      
    
    }elseif($module=='pendataan' AND $act=='upload'){

        $key=$_POST['key'];

        $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM rtlh_temp WHERE sha1(kode_rdm)='$key'");
        while ($data = mysqli_fetch_array($checkRecord11ss)){
        $noktp=$data['no_ktp'];

        $checkRecord11ss1 = mysqli_query($koneksi,"SELECT * FROM rtlh WHERE no_ktp='$noktp'");
        $data1 = mysqli_fetch_array($checkRecord11ss1);
        $noktp1=$data1['no_ktp'];

        if($noktp!=$noktp1){

            mysqli_query($koneksi,"INSERT INTO rtlh (no_urut
            ,nama_kk
            ,no_ktp
            ,alamat_rumah
            ,no_hp
            ,jenis_kelamin
            ,pekerjaan
            ,penghasilan
            ,sts_kepemilikan_rumah
            ,aset_rumah
            ,sts_kepemilikan_tanah
            ,jenis_kawasan
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
            ,luas_rumah
            ,jumlah_penghuni
            ,sumber_air_minum
            ,jarak_tinja
            ,jamban
            ,jenis_kloset
            ,jenis_tpa_tinja
            ,longitude
            ,latitude
            ,foto
            ,kode_kec
            ,kode_kel
            ,kode_kota
            ,kode_prov
            ,sts_verifikasi
            ,ket_verifikasi
            ,tahun_verifikasi
            ,tgl_input_data
            ,tahun_input_data
            ,nama_pendata
                    )
                    SELECT no_urut
            ,nama_kk
            ,no_ktp
            ,alamat_rumah
            ,no_hp
            ,jenis_kelamin
            ,pekerjaan
            ,penghasilan
            ,sts_kepemilikan_rumah
            ,aset_rumah
            ,sts_kepemilikan_tanah
            ,jenis_kawasan
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
            ,luas_rumah
            ,jumlah_penghuni
            ,sumber_air_minum
            ,jarak_tinja
            ,jamban
            ,jenis_kloset
            ,jenis_tpa_tinja
            ,longitude
            ,latitude
            ,foto
            ,kode_kec
            ,kode_kel
            ,kode_kota
            ,kode_prov
            ,sts_verifikasi
            ,ket_verifikasi
            ,tahun_verifikasi
            ,tgl_input_data
            ,tahun_input_data
            ,nama_pendata  FROM 
                       rtlh_temp
                    WHERE 
                    no_ktp='$noktp'");
                
                   
                
        }

        mysqli_query($koneksi,"DELETE From rtlh_temp where no_ktp='$noktp'");

        }

        


    }elseif($module=='rtlhtemp' AND $act=='upload2'){

        $kodekel=$_POST['kodekel'];
        $username=$_SESSION['namausershped'];

        mysqli_query($koneksi,"INSERT INTO rtlh (no_urut
,nama_kk
,no_ktp
,alamat_rumah
,no_hp
,jenis_kelamin
,pekerjaan
,penghasilan
,sts_kepemilikan_rumah
,aset_rumah
,sts_kepemilikan_tanah
,jenis_kawasan
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
,luas_rumah
,jumlah_penghuni
,sumber_air_minum
,jarak_tinja
,jamban
,jenis_kloset
,jenis_tpa_tinja
,longitude
,latitude
,foto
,kode_kec
,kode_kel
,kode_kota
,kode_prov
,sts_verifikasi
,ket_verifikasi
,tahun_verifikasi
,tgl_input_data
,tahun_input_data
,nama_pendata
        )
        SELECT no_urut
,nama_kk
,no_ktp
,alamat_rumah
,no_hp
,jenis_kelamin
,pekerjaan
,penghasilan
,sts_kepemilikan_rumah
,aset_rumah
,sts_kepemilikan_tanah
,jenis_kawasan
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
,luas_rumah
,jumlah_penghuni
,sumber_air_minum
,jarak_tinja
,jamban
,jenis_kloset
,jenis_tpa_tinja
,longitude
,latitude
,foto
,kode_kec
,kode_kel
,kode_kota
,kode_prov
,sts_verifikasi
,ket_verifikasi
,tahun_verifikasi
,tgl_input_data
,tahun_input_data
,nama_pendata  FROM 
           rtlh_temp
        WHERE 
        kode_kel='$kodekel' and username='$username'");
    
        mysqli_query($koneksi,"DELETE From rtlh_temp where kode_kel='$kodekel' and username='$username'");
    


    }elseif($module=='pendataan' AND $act=='bataldata'){



        $arrayj=$_POST['kodedt'];
        $arr = json_decode($arrayj, true);
        foreach ($arr as $value) {
         $ft =  $value[4];
        mysqli_query($koneksi,"UPDATE rtlh set sts_verifikasi='T', ket_verifikasi='', tahun_verifikasi='' where no_ktp='$ft'");
        }
    }
?>
<?php
$koneksi->close();
}
?>