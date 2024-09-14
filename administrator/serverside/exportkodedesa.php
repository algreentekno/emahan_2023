<?php
 
 include "../config/koneksi_li.php";
 date_default_timezone_set('Asia/Jakarta');
 include"../app/PHPExcel/PHPExcel.php";
 $nmkb="EXPORT_KODE_DESA_";
 $kodekota=$_GET['kode_kota'];
 $kodekec=$_GET['kode_kec'];
 
 function generatestring($panjang){
	 
        $karakter='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $string='';
        for($i=0;$i<$panjang;$i++){
        $pos=rand(0, strlen($karakter)-1);
        $string .= $karakter[$pos];
        }
        return $string;
    }
     $randomtext=generatestring(25);

 $sql = "SELECT * FROM kelurahan a inner join kecamatan b on a.kode_kec=b.kode_kec inner join kota c on b.kode_kota=c.kode_kota where b.kode_kec='$kodekec' and c.kode_kota='$kodekota'";
 $result = mysqli_query($koneksi,$sql);

    $objPHPExcel = new PHPExcel();
    $objPHPExcel->getProperties()
            ->setCreator("CIPTAKARYAPROVINSILAMPUNG")
            ->setTitle("Data Kode Desa Kelurahan");

    $objset = $objPHPExcel->setActiveSheetIndex(0); //inisiasi set object dan index sheet
    $objget = $objPHPExcel->getActiveSheet();  //inisiasi get object
    $objget ->getStyle('A1:F1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFDBE2F1');  //inisiasi get object
    $objget->setTitle('Data Kode Desa Kelurahan');

    $objset->setCellValue('A1','Kode Kabupaten Kota');
    $objset->setCellValue('B1','Nama Kabupaten Kota');
    $objset->setCellValue('C1','Kode Kecamatan');
    $objset->setCellValue('D1','Nama Kecamatan');
    $objset->setCellValue('E1','Kode Kelurahan Desa');
    $objset->setCellValue('F1','Nama Kelurahan Desa');
    $baris=2;
    while($row=mysqli_fetch_assoc($result)){
     $objset->setCellValue("A".$baris, $row['kode_kota']);
     $objset->setCellValue("B".$baris, $row['nama_kota']);
     $objset->setCellValue("C".$baris, $row['kode_kec']);
     $objset->setCellValue("D".$baris, $row['nama_kecamatan']);
     $objset->setCellValue("E".$baris, $row['kode_kel']);
     $objset->setCellValue("F".$baris, $row['nama_kelurahan']);
     $baris++;
    } 

     //$filename = "-".date("d-m-Y").".xlsx";
     $filename=$nmkb.$randomtext.date('Ymd').".xlsx";
       
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

    //sesuaikan headernya
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    //ubah nama file ketika diunduh
    header('Content-Disposition: attachment;filename='.$filename);
    //unduh file
    $objWriter->save("php://output");

?>