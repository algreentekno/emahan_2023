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
                    $no_sk = $worksheet->getCellByColumnAndRow(3, $row)->getValue();  
                    $lokasi = $worksheet->getCellByColumnAndRow(4, $row)->getValue();  
                    $luas_kumuh = $worksheet->getCellByColumnAndRow(5, $row)->getValue();  
                    $luas_penanganan_2020 = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $luas_penanganan_2021 = $worksheet->getCellByColumnAndRow(7, $row)->getFormattedValue();  
                    $luas_penanganan_2022 = $worksheet->getCellByColumnAndRow(8, $row)->getValue();  
                    $total_luas_penanganan = $worksheet->getCellByColumnAndRow(9, $row)->getValue();  
                    $luas_kumuh_2023 = $worksheet->getCellByColumnAndRow(10, $row)->getValue();  
                    $nomor_urut = $worksheet->getCellByColumnAndRow(11, $row)->getValue();

                    mysqli_query($koneksi, "INSERT INTO kumuh_luas_temp (kode_prov
                    ,kode_kota
                    ,kode_kec
                    ,kode_kel
                    ,no_sk
                    ,lokasi
                    ,luas_kumuh
                    ,luas_penanganan_2020
                    ,luas_penanganan_2021
                    ,luas_penanganan_2022
                    ,total_luas_penanganan
                    ,luas_kumuh_2023
                    ,klasifikasi_kumuh
                    ,tahun_data
                    ,kode_rdm
                    ,nomor_urut
                    ) VALUES ('18'
                    ,'$kode_kota'
                    ,'$kode_kec'
                    ,'$kode_kel'
                    ,'$no_sk'
                    ,'$lokasi'
                    ,'$luas_kumuh'
                    ,'$luas_penanganan_2020'
                    ,'$luas_penanganan_2021'
                    ,'$luas_penanganan_2022'
                    ,'$total_luas_penanganan'
                    ,'$luas_kumuh_2023'
                    ,'2'
                    ,'$thndt'
                    ,'$rdmtext'
                    ,'$nomor_urut'
                    )");
   
                    
       
//========================================================================================
                }  
           }  
           
           
      
      
 }  
 ?>