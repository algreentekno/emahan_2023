<?php
ini_set('precision', '15');
include "../config/koneksi_li.php"; 
date_default_timezone_set('Asia/Jakarta');
$tanggal= date('Y-m-d');
$thndt=date('Y');
$rdmtext=$_POST['rdm'];
$keterangan=$_POST['keterangan'];
$jenisdata=$_POST['jenisdata'];
$kab=$_POST['kab'];

$temp = "../upload/";
if (!file_exists($temp))
mkdir($temp);

$fileupload             = $_FILES['beritaacara']['tmp_name'];
$ImageName              = $_FILES['beritaacara']['name'];
$ImageType              = $_FILES['beritaacara']['type'];

$acak           = rand(11111111, 99999999);
$ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
$ImageExt      = str_replace('.','',$ImageExt); // Extension
$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
$NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);

move_uploaded_file($_FILES["beritaacara"]["tmp_name"], $temp.$NewImageName); // Menyimpan file

mysqli_query($koneksi,"INSERT INTO upload_data (rdm
,jenis_data
,keterangan
,tanggal_input
,tahun_data
,berita_acara
,kode_prov
,kode_kota
) values ('$rdmtext'
,'$jenisdata'
,'$keterangan'
,'$tanggal'
,'$thndt'
,'$NewImageName'
,'18'
,'$kab'
)");


 if(!empty($_FILES["template"]))  
 {  
      
    include("../app/PHPExcel/PHPExcel/IOFactory.php");
           
           $object = PHPExcel_IOFactory::load($_FILES["template"]["tmp_name"]); 
           
           foreach($object->getWorksheetIterator() as $worksheet)  
           {  
                $highestRow = $worksheet->getHighestRow();  
                for($row=4; $row<=$highestRow; $row++)  
                {  

                    $kode_kota = $worksheet->getCellByColumnAndRow(0, $row)->getFormattedValue();  
                    $kode_kec = $worksheet->getCellByColumnAndRow(1, $row)->getValue();  
                    $kode_kel = $worksheet->getCellByColumnAndRow(2, $row)->getValue();  
                    $nama = $worksheet->getCellByColumnAndRow(3, $row)->getValue();  
                    $lokasi = $worksheet->getCellByColumnAndRow(4, $row)->getValue();  
                    $jum_unit_rumah = $worksheet->getCellByColumnAndRow(5, $row)->getValue();  
                    $luas_lahan_perumahan = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $nama_pengembang = $worksheet->getCellByColumnAndRow(7, $row)->getFormattedValue();  
                    $pengembang = $worksheet->getCellByColumnAndRow(8, $row)->getValue();  
                    $jalan = $worksheet->getCellByColumnAndRow(9, $row)->getValue();  
                    $drainase = $worksheet->getCellByColumnAndRow(10, $row)->getValue();  
                    $air_limbah = $worksheet->getCellByColumnAndRow(11, $row)->getValue();  
                    $persampahan = $worksheet->getCellByColumnAndRow(12, $row)->getValue();  
                    $air_minum = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
                    $rumah_ibadah = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
                    $ruang_terbuka_hijau = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
                    $jaringan_listrik = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
                    $jaringan_telpon = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $persentase_psu = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
                    $latitude = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
                    $longitude = $worksheet->getCellByColumnAndRow(20, $row)->getValue();
                    $nomor_urut = $worksheet->getCellByColumnAndRow(21, $row)->getValue();
                   
                    mysqli_query($koneksi, "INSERT INTO perumahan_temp (kode_prov
                    ,kode_kota
                    ,kode_kec
                    ,kode_kel
                    ,nama
                    ,lokasi
                    ,jum_unit_rumah
                    ,luas_lahan_perumahan
                    ,nama_pengembang
                    ,pengembang
                    ,jalan
                    ,drainase
                    ,air_limbah
                    ,persampahan
                    ,air_minum
                    ,rumah_ibadah
                    ,ruang_terbuka_hijau
                    ,jaringan_listrik
                    ,jaringan_telpon
                    ,persentase_psu
                    ,latitude
                    ,longitude
                    ,tahun_data
                    ,kode_rdm
                    ,nomor_urut
                    ) VALUES ('18'
                    ,'$kode_kota'
                    ,'$kode_kec'
                    ,'$kode_kel'
                    ,'$nama'
                    ,'$lokasi'
                    ,'$jum_unit_rumah'
                    ,'$luas_lahan_perumahan'
                    ,'$nama_pengembang'
                    ,'$pengembang'
                    ,'$jalan'
                    ,'$drainase'
                    ,'$air_limbah'
                    ,'$persampahan'
                    ,'$air_minum'
                    ,'$rumah_ibadah'
                    ,'$ruang_terbuka_hijau'
                    ,'$jaringan_listrik'
                    ,'$jaringan_telpon'
                    ,'$persentase_psu'
                    ,'$latitude'
                    ,'$longitude'
                    ,'$thndt'
                    ,'$rdmtext'
                    ,'$nomor_urut'
                    )");
   
                    
       
//========================================================================================
                }  
           }  
           
           
      
      
 }  
 ?>