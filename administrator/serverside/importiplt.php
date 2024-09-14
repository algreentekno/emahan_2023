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
                    $nama_iplt = $worksheet->getCellByColumnAndRow(3, $row)->getValue();  
                    $pengelola = $worksheet->getCellByColumnAndRow(4, $row)->getValue();  
                    $kapasitas_rencana = $worksheet->getCellByColumnAndRow(5, $row)->getValue();  
                    $kapasitas_realisasi = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $jum_tersedia = $worksheet->getCellByColumnAndRow(7, $row)->getFormattedValue();  
                    $jum_terlayani = $worksheet->getCellByColumnAndRow(8, $row)->getValue();  
                    $sistem_unit = $worksheet->getCellByColumnAndRow(9, $row)->getValue();  
                    $status_operasional = $worksheet->getCellByColumnAndRow(10, $row)->getValue();  
                    $tahun_pembangunan = $worksheet->getCellByColumnAndRow(11, $row)->getValue();  
                    $sumber_dana = $worksheet->getCellByColumnAndRow(12, $row)->getValue();  
                    $tahun_optimalisasi = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
                    $sumber_dana_optimalisasi = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
                    $jum_mobil_sedot_tinja = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
                    $status_kondisi_mobil = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
                    $mou_pengangkut = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $latitude = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
                    $longitude = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
                    $nomor_urut = $worksheet->getCellByColumnAndRow(20, $row)->getValue();
                   
                    mysqli_query($koneksi, "INSERT INTO air_limbah_iplt_temp (kode_prov
                    ,kode_kota
                    ,kode_kec
                    ,kode_kel
                    ,nama_iplt
                    ,pengelola
                    ,kapasitas_rencana
                    ,kapasitas_realisasi
                    ,jum_tersedia
                    ,jum_terlayani
                    ,sistem_unit
                    ,status_operasional
                    ,tahun_pembangunan
                    ,sumber_dana
                    ,tahun_optimalisasi
                    ,sumber_dana_optimalisasi
                    ,jum_mobil_sedot_tinja
                    ,status_kondisi_mobil
                    ,mou_pengangkut
                    ,latitude
                    ,longitude
                    ,tahun_data
                    ,kode_rdm
                    ,nomor_urut
                    ) VALUES ('18'
                    ,'$kode_kota'
                    ,'$kode_kec'
                    ,'$kode_kel'
                    ,'$nama_iplt'
                    ,'$pengelola'
                    ,'$kapasitas_rencana'
                    ,'$kapasitas_realisasi'
                    ,'$jum_tersedia'
                    ,'$jum_terlayani'
                    ,'$sistem_unit'
                    ,'$status_operasional'
                    ,'$tahun_pembangunan'
                    ,'$sumber_dana'
                    ,'$tahun_optimalisasi'
                    ,'$sumber_dana_optimalisasi'
                    ,'$jum_mobil_sedot_tinja'
                    ,'$status_kondisi_mobil'
                    ,'$mou_pengangkut'
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