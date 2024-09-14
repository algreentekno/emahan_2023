<?php
include "../config/koneksi_li.php";
include "../config/fungsi_matauang1.php";
if($_POST['kode_kota']=='18'){
    $sql1= "SELECT sum(a.capaian_1) as timbulsampah,sum(a.capaian_2) as penanganansampah,sum(a.capaian_4) as pengurangansampah
    ,round(sum(b.capaian_3),2) as targetpenanganan,round(sum(b.capaian_5),2) as targetpengurangan
    ,round(sum(((a.capaian_2/a.capaian_1)*100)),2) as capaianpenanganan,round(sum(((a.capaian_4/a.capaian_1)*100)),2) as capaianpengurangan
    from sampah_akses a inner join sampah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$_POST[tahun]' and a.validasi='1' group by a.tahun_data"; 
    
}else{
$sql1= "SELECT sum(a.capaian_1) as timbulsampah,sum(a.capaian_2) as penanganansampah,sum(a.capaian_4) as pengurangansampah
,round(sum(b.capaian_3),2) as targetpenanganan,round(sum(b.capaian_5),2) as targetpengurangan
,round(sum(((a.capaian_2/a.capaian_1)*100)),2) as capaianpenanganan,round(sum(((a.capaian_4/a.capaian_1)*100)),2) as capaianpengurangan
from sampah_akses a inner join sampah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$_POST[tahun]' and a.kode_kota='$_POST[kode_kota]' and a.validasi='1' group by a.kode_kota,a.tahun_data"; 
}
$hasil1 = mysqli_query($koneksi,$sql1);
$dtjum=mysqli_num_rows($hasil1);
if($dtjum>0){
    $mahasiswa=mysqli_fetch_array($hasil1);
    $timbulsampah1=rupiah($mahasiswa['timbulsampah']);
    $penanganansampah1=rupiah($mahasiswa['penanganansampah']);
    $pengurangansampah1=rupiah($mahasiswa['pengurangansampah']);
$data = array(
    'timbulsampah'  =>  "$timbulsampah1",
    'penanganansampah'  =>  "$penanganansampah1",
    'pengurangansampah'  =>  "$pengurangansampah1",
    'targetpenanganan'  =>  "$mahasiswa[targetpenanganan] %",
    'targetpengurangan'  =>  "$mahasiswa[targetpengurangan] %",
    'capaianpenanganan'  =>  "$mahasiswa[capaianpenanganan] %",
    'capaianpengurangan'  =>  "$mahasiswa[capaianpengurangan] %",
    'kodekota1'  =>  $_POST['kode_kota'],
    );
echo json_encode($data);
    
}else{
    $data = array(
        'timbulsampah'  =>  '0',
        'penanganansampah'  =>  '0',
        'pengurangansampah'  =>  '0',
        'targetpenanganan'  =>  '0 %',
        'targetpengurangan'  =>  '0 %',
        'capaianpenanganan'  =>  '0 %',
        'capaianpengurangan'  =>  '0 %',
        'kodekota1'  =>  $_POST['kode_kota'],
        );
    echo json_encode($data);
}
?>
