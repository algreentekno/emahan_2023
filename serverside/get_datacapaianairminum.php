<?php
include "../config/koneksi_li.php";
include "../config/fungsi_matauang1.php";
if($_POST['kode_kota']=='18'){
    $sql1= "SELECT sum(a.jum_penduduk_kk) as jumpendudukkk,sum(a.jumlah_penduduk_jiwa) as jumpenduduk,sum(a.jumlah_penduduk_pedesaan) as jumpendudukdesa,sum(a.jumlah_penduduk_perkotaan) as jumpendudukkota
    ,round(sum(b.capaian_1),1) as targetlayak,round(sum(b.capaian_3),1) as targetperpipaan,round(sum(b.capaian_5),1) as targetnonperpipaan,round(sum(b.capaian_7),1) as targetaman
    ,round(sum(((a.capaian_2/a.jum_penduduk_kk)*100)),1) as capaianlayak,round(sum(((a.capaian_4/a.jum_penduduk_kk)*100)),1) as capaianperpipaan,round(sum(((a.capaian_6/a.jum_penduduk_kk)*100)),1) as capaiannonperpipaan,round(sum(((a.capaian_8/a.jum_penduduk_kk)*100)),1) as capaianaman
    from air_minum_capaian a inner join air_minum_capaian_target b on a.kode_kota=b.kode_kota where a.tahun_data='$_POST[tahun]' and a.validasi='1' group by a.tahun_data"; 
    
}else{
$sql1= "SELECT sum(a.jum_penduduk_kk) as jumpendudukkk,sum(a.jumlah_penduduk_jiwa) as jumpenduduk,sum(a.jumlah_penduduk_pedesaan) as jumpendudukdesa,sum(a.jumlah_penduduk_perkotaan) as jumpendudukkota
,round(sum(b.capaian_1),1) as targetlayak,round(sum(b.capaian_3),1) as targetperpipaan,round(sum(b.capaian_5),1) as targetnonperpipaan,round(sum(b.capaian_7),1) as targetaman
,round(sum(((a.capaian_2/a.jum_penduduk_kk)*100)),1) as capaianlayak,round(sum(((a.capaian_4/a.jum_penduduk_kk)*100)),1) as capaianperpipaan,round(sum(((a.capaian_6/a.jum_penduduk_kk)*100)),1) as capaiannonperpipaan,round(sum(((a.capaian_8/a.jum_penduduk_kk)*100)),1) as capaianaman
from air_minum_capaian a inner join air_minum_capaian_target b on a.kode_kota=b.kode_kota where a.tahun_data='$_POST[tahun]' and a.kode_kota='$_POST[kode_kota]' and a.validasi='1' group by a.kode_kota,a.tahun_data"; 
}
$hasil1 = mysqli_query($koneksi,$sql1);
$dtjum=mysqli_num_rows($hasil1);
if($dtjum>0){
    $mahasiswa=mysqli_fetch_array($hasil1);
    $jumpendudukdt1=rupiah($mahasiswa['jumpenduduk']);
    $jumpendudukdesa1=rupiah($mahasiswa['jumpendudukdesa']);
    $jumpendudukkk1=rupiah($mahasiswa['jumpendudukkk']);
    $jumpendudukkota1=rupiah($mahasiswa['jumpendudukkota']);
$data = array(
    'jumpenduduk'  =>  "$jumpendudukdt1",
    'jumpendudukkk'  =>  "$jumpendudukkk1",
    'jumpendudukdesa'  =>  "$jumpendudukdesa1",
    'jumpendudukkota'  =>  "$jumpendudukkota1",
    'targetlayak'  =>  "$mahasiswa[targetlayak] %",
    'targetperpipaan'  =>  "$mahasiswa[targetperpipaan] %",
    'targetnonperpipaan'  =>  "$mahasiswa[targetnonperpipaan] %",
    'targetaman'  =>  "$mahasiswa[targetlayak] %",
    'capaianlayak'  =>  "$mahasiswa[capaianlayak] %",
    'capaianperpipaan'  =>  "$mahasiswa[capaianperpipaan] %",
    'capaiannonperpipaan'  =>  "$mahasiswa[capaiannonperpipaan] %",
    'capaianaman'  =>  "$mahasiswa[capaianaman] %",
    'kodekota1'  =>  $_POST['kode_kota'],
    );
echo json_encode($data);
    
}else{
    $data = array(
    'jumpenduduk'  => '0',
    'jumpendudukkk'  =>  '0',
    'jumpendudukdesa'  =>  '0',
    'jumpendudukkota'  => '0',
    'targetlayak'  =>  '0 %',
    'targetperpipaan'  =>  '0 %',
    'targetnonperpipaan'  =>  '0 %',
    'targetaman'  => '0 %',
    'capaianlayak'  => '0 %',
    'capaianperpipaan'  =>  '0 %',
    'capaiannonperpipaan'  => '0 %',
    'capaianaman'  => '0 %',
    'kodekota1'  =>  $_POST['kode_kota'],
        );
    echo json_encode($data);
}
?>
