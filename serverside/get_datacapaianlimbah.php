<?php
include "../config/koneksi_li.php";
include "../config/fungsi_matauang1.php";
if($_POST['kode_kota']=='18'){
    $sql1= "SELECT sum(a.jum_penduduk_kk) as jumpendudukkk,sum(a.jumlah_penduduk_jiwa) as jumpenduduk,sum(a.jumlah_penduduk_pedesaan) as jumpendudukdesa,sum(a.jumlah_penduduk_perkotaan) as jumpendudukkota
    ,round(sum(b.capaian_1),1) as targetaman,round(sum((b.capaian_2 + b.capaian_3)/2),1) as targetlayak,round(sum((b.capaian_4 + b.capaian_5 + b.capaian_6)/3),1) as targetbelumlayak
    ,round(sum(((a.capaian_1/a.jum_penduduk_kk)*100)),1) as capaianaman,round(sum((((a.capaian_2 + a.capaian_3)/a.jum_penduduk_kk)*100)),1) as capaianlayak,round(sum((((a.capaian_4 + a.capaian_5 + a.capaian_6)/a.jum_penduduk_kk)*100)),1) as capaianblmlayak
    from air_limbah_akses a inner join air_limbah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$_POST[tahun]' and a.validasi='1' group by a.tahun_data"; 
    
}else{
$sql1= "SELECT sum(a.jum_penduduk_kk) as jumpendudukkk,sum(a.jumlah_penduduk_jiwa) as jumpenduduk,sum(a.jumlah_penduduk_pedesaan) as jumpendudukdesa,sum(a.jumlah_penduduk_perkotaan) as jumpendudukkota
,round(sum(b.capaian_1),1) as targetaman,round(sum((b.capaian_2 + b.capaian_3)/2),1) as targetlayak,round(sum((b.capaian_4 + b.capaian_5 + b.capaian_6)/3),1) as targetbelumlayak
,round(sum(((a.capaian_1/a.jum_penduduk_kk)*100)),1) as capaianaman,round(sum((((a.capaian_2 + a.capaian_3)/a.jum_penduduk_kk)*100)),1) as capaianlayak,round(sum((((a.capaian_4 + a.capaian_5 + a.capaian_6)/a.jum_penduduk_kk)*100)),1) as capaianblmlayak
from air_limbah_akses a inner join air_limbah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$_POST[tahun]' and a.kode_kota='$_POST[kode_kota]' and a.validasi='1' group by a.kode_kota,a.tahun_data"; 
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
    'targetaman'  =>  "$mahasiswa[targetaman] %",
    'targetlayak'  =>  "$mahasiswa[targetlayak] %",
    'targetbelumlayak'  =>  "$mahasiswa[targetbelumlayak] %",
    'capaianaman'  =>  "$mahasiswa[capaianaman] %",
    'capaianlayak'  =>  "$mahasiswa[capaianlayak] %",
    'capaianblmlayak'  =>  "$mahasiswa[capaianblmlayak] %",
    'kodekota1'  =>  $_POST['kode_kota'],
    );
echo json_encode($data);
    
}else{
    $data = array(
        'jumpenduduk'  =>  '0',
        'jumpendudukkk'  =>  '0',
        'jumpendudukdesa'  =>  '0',
        'jumpendudukkota'  =>  '0',
        'targetaman'  =>  '0 %',
        'targetlayak'  =>  '0 %',
        'targetbelumlayak'  =>  '0 %',
        'capaianaman'  =>  '0 %',
        'capaianlayak'  =>  '0 %',
        'capaianblmlayak'  =>  '0 %',
        'kodekota1'  =>  $_POST['kode_kota'],
        );
    echo json_encode($data);
}
?>
