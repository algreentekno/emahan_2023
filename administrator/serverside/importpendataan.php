<?php
session_start();
$username=$_SESSION['namausershped'];
ini_set('precision', '15');
include "../config/koneksi_li.php"; 
date_default_timezone_set('Asia/Jakarta');
$tanggal= date('Y-m-d');
$thndt=date('Y');
$urut=date('Ymd');
$rdmtext=$_POST['rdm'];
$ket_verifikasi=$_POST['ket_verifikasi'];

if($ket_verifikasi=='DIUSULKAN'){
$sts_verifikasi='Y';
}else{
$sts_verifikasi='T';
}

 if(!empty($_FILES["template"]))  
 {  
      
    include("../app/PHPExcel/PHPExcel/IOFactory.php");
           
           $object = PHPExcel_IOFactory::load($_FILES["template"]["tmp_name"]); 
           
           foreach($object->getWorksheetIterator() as $worksheet)  
           {  
                $highestRow = $worksheet->getHighestRow();  
                for($row=4; $row<=$highestRow; $row++)  
                {  

                    $kode_kel = $worksheet->getCellByColumnAndRow(0, $row)->getValue();  
                    $kode_kec=substr("$kode_kel",0,8);
                    $kode_kota=substr("$kode_kel",0,5);
                    $no_urut1 = $worksheet->getCellByColumnAndRow(1, $row)->getValue();  
                    $pch = str_replace('.','', $kode_kel);
                    $no_urut=$urut.$pch.$no_urut1;
                    //=================================================================
                    $nama_kk = $worksheet->getCellByColumnAndRow(2, $row)->getValue(); 
                    $no_ktp = $worksheet->getCellByColumnAndRow(3, $row)->getValue(); 
                    $alamat_rumah = $worksheet->getCellByColumnAndRow(4, $row)->getValue(); 
                    $no_hp = $worksheet->getCellByColumnAndRow(5, $row)->getValue(); 
                    $jenis_kelamin = $worksheet->getCellByColumnAndRow(6, $row)->getValue(); 
                    $pekerjaan = $worksheet->getCellByColumnAndRow(7, $row)->getValue(); 
                    $penghasilan = $worksheet->getCellByColumnAndRow(8, $row)->getValue(); 
                    $sts_kepemilikan_rumah = $worksheet->getCellByColumnAndRow(9, $row)->getValue(); 
                    $aset_rumah = $worksheet->getCellByColumnAndRow(10, $row)->getValue(); 
                    $sts_kepemilikan_tanah = $worksheet->getCellByColumnAndRow(11, $row)->getValue(); 
                    $jenis_kawasan1 = $worksheet->getCellByColumnAndRow(12, $row)->getValue(); 
                    $jenis_kawasan2 = $worksheet->getCellByColumnAndRow(13, $row)->getValue(); 
                    $jenis_kawasan3 = $worksheet->getCellByColumnAndRow(14, $row)->getValue(); 
                    $jenis_kawasan4 = $worksheet->getCellByColumnAndRow(15, $row)->getValue();

                    if($jenis_kawasan1!=''){
                        $jenis_kawasan=$jenis_kawasan1;
                    }elseif($jenis_kawasan1!='' AND $jenis_kawasan2!=''){
                        $jenis_kawasan=$jenis_kawasan1.",".$jenis_kawasan2;
                    }elseif($jenis_kawasan1!='' AND $jenis_kawasan2!='' AND $jenis_kawasan3!=''){
                        $jenis_kawasan=$jenis_kawasan1.",".$jenis_kawasan2.",".$jenis_kawasan3;
                    }elseif($jenis_kawasan1!='' AND $jenis_kawasan2!='' AND $jenis_kawasan3!='' AND $jenis_kawasan4!=''){
                        $jenis_kawasan=$jenis_kawasan1.','.$jenis_kawasan2.','.$jenis_kawasan3.','.$jenis_kawasan4;
                    }

                    $material_pondasi = $worksheet->getCellByColumnAndRow(16, $row)->getValue(); 
                    $material_kolom = $worksheet->getCellByColumnAndRow(17, $row)->getValue(); 
                    $material_rangka_atap = $worksheet->getCellByColumnAndRow(18, $row)->getValue(); 
                    $material_plafon = $worksheet->getCellByColumnAndRow(19, $row)->getValue(); 
                    $material_balok = $worksheet->getCellByColumnAndRow(20, $row)->getValue(); 
                    $sloof = $worksheet->getCellByColumnAndRow(21, $row)->getValue(); 
                    $jendela = $worksheet->getCellByColumnAndRow(22, $row)->getValue(); 
                    $ventilasi = $worksheet->getCellByColumnAndRow(23, $row)->getValue(); 
                    $kondisi_lantai = $worksheet->getCellByColumnAndRow(24, $row)->getValue(); 
                    $material_lantai = $worksheet->getCellByColumnAndRow(25, $row)->getValue(); 
                    $kondisi_dinding = $worksheet->getCellByColumnAndRow(26, $row)->getValue(); 
                    $material_dinding = $worksheet->getCellByColumnAndRow(27, $row)->getValue(); 
                    $kondisi_atap = $worksheet->getCellByColumnAndRow(28, $row)->getValue(); 
                    $material_atap = $worksheet->getCellByColumnAndRow(29, $row)->getValue(); 
                    $luas_rumah = $worksheet->getCellByColumnAndRow(30, $row)->getValue(); 
                    $jumlah_penghuni = $worksheet->getCellByColumnAndRow(31, $row)->getValue(); 
                    $sumber_air_minum = $worksheet->getCellByColumnAndRow(32, $row)->getValue(); 
                    $jarak_tinja = $worksheet->getCellByColumnAndRow(33, $row)->getValue(); 
                    $jamban = $worksheet->getCellByColumnAndRow(34, $row)->getValue(); 
                    $jenis_kloset = $worksheet->getCellByColumnAndRow(35, $row)->getValue(); 
                    $jenis_tpa_tinja = $worksheet->getCellByColumnAndRow(36, $row)->getValue(); 
                    $foto = $worksheet->getCellByColumnAndRow(37, $row)->getValue();
                    $longitude = $worksheet->getCellByColumnAndRow(38, $row)->getValue(); 
                    $latitude = $worksheet->getCellByColumnAndRow(39, $row)->getValue(); 
                    $tgl_input_data1 = $worksheet->getCellByColumnAndRow(40, $row)->getValue(); 
                    $nama_pendata = $worksheet->getCellByColumnAndRow(41, $row)->getValue(); 
                    $tgl_input_data  = PHPExcel_Style_NumberFormat::toFormattedString($tgl_input_data1,  'YYYY-MM-DD');
                    if($no_ktp!=''){

                        $sql_query = "select * from rtlh where no_ktp='$no_ktp'";
                            $result = mysqli_query($koneksi,$sql_query);
                            $adadata=mysqli_num_rows($result);
                            if($adadata>0){
                                $sts_ktp='1';
                            }else{
                                $sts_ktp='0';
                            }

                    mysqli_query($koneksi, "REPLACE INTO rtlh_temp (no_urut
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
                    ,kode_rdm
                    ,username
                    ,sts_ktp
                    ) VALUES ('$no_urut'
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
,'$foto'
,'$kode_kec'
,'$kode_kel'
,'$kode_kota'
,'18'
,'$sts_verifikasi'
,'$ket_verifikasi'
,'$thndt'
,'$tgl_input_data'
,'$thndt'
,'$nama_pendata'
,'$rdmtext'
,'$username'
,'$sts_ktp'
)");

                    }
   
                    
       
//========================================================================================
                }  
           }  
           
           
      
      
 }  
 ?>