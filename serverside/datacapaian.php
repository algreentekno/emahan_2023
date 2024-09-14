<?php
date_default_timezone_set('Asia/Jakarta');
$tahun=date("Y");
include "../config/koneksi_li.php";

    $sql1= "SELECT sum(a.jum_penduduk_kk) as jumpendudukkk,sum(a.jumlah_penduduk_jiwa) as jumpenduduk,sum(a.jumlah_penduduk_pedesaan) as jumpendudukdesa,sum(a.jumlah_penduduk_perkotaan) as jumpendudukkota
    ,round(sum(b.capaian_1),1) as targetaman,round(sum((b.capaian_2 + b.capaian_3)/2),1) as targetlayak,round(sum((b.capaian_4 + b.capaian_5 + b.capaian_6)/3),1) as targetbelumlayak
    ,round(sum(((a.capaian_1/a.jum_penduduk_kk)*100)),1) as capaianaman,round(sum((((a.capaian_2 + a.capaian_3)/a.jum_penduduk_kk)*100)),1) as capaianlayak,round(sum((((a.capaian_4 + a.capaian_5 + a.capaian_6)/a.jum_penduduk_kk)*100)),1) as capaianblmlayak
    from air_limbah_akses a inner join air_limbah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$tahun' and a.validasi='1' group by a.tahun_data"; 
    $hasil1 = mysqli_query($koneksi,$sql1);
    $dtjum=mysqli_num_rows($hasil1);
    if($dtjum>0){
        $mahasiswa=mysqli_fetch_array($hasil1);
        $capaianaman=$mahasiswa['capaianaman'];
        $capaianlayak=$mahasiswa['capaianlayak'];
        $capaianblmlayak=$mahasiswa['capaianblmlayak'];
        
    }else{

        $capaianaman='0';
        $capaianlayak='0';
        $capaianblmlayak='0';

    }

    $sql12= "SELECT sum(a.jum_penduduk_kk) as jumpendudukkk,sum(a.jumlah_penduduk_jiwa) as jumpenduduk,sum(a.jumlah_penduduk_pedesaan) as jumpendudukdesa,sum(a.jumlah_penduduk_perkotaan) as jumpendudukkota
    ,round(sum(b.capaian_1),1) as targetlayak,round(sum(b.capaian_3),1) as targetperpipaan,round(sum(b.capaian_5),1) as targetnonperpipaan,round(sum(b.capaian_7),1) as targetaman
    ,round(sum(((a.capaian_2/a.jum_penduduk_kk)*100)),1) as capaianlayak,round(sum(((a.capaian_4/a.jum_penduduk_kk)*100)),1) as capaianperpipaan,round(sum(((a.capaian_6/a.jum_penduduk_kk)*100)),1) as capaiannonperpipaan,round(sum(((a.capaian_8/a.jum_penduduk_kk)*100)),1) as capaianaman
    from air_minum_capaian a inner join air_minum_capaian_target b on a.kode_kota=b.kode_kota where a.tahun_data='$tahun' and a.validasi='1' group by a.tahun_data"; 
    $hasil12 = mysqli_query($koneksi,$sql12);
    $dtjum2=mysqli_num_rows($hasil12);
    if($dtjum2>0){
        $mahasiswa2=mysqli_fetch_array($hasil12);
        $capaianaman2=$mahasiswa2['capaianaman'];
        $capaianlayak2=$mahasiswa2['capaianlayak'];
        $capaianperpipaan=$mahasiswa2['capaianperpipaan'];
        $capaiannonperpipaan=$mahasiswa2['capaiannonperpipaan'];
        
    }else{

        $capaianaman2='0';
        $capaianlayak2='0';
        $capaianperpipaan='0';
        $capaiannonperpipaan='0';

    }


    $sql122= "SELECT sum(a.capaian_1) as timbulsampah,sum(a.capaian_2) as penanganansampah,sum(a.capaian_4) as pengurangansampah
    ,round(sum(b.capaian_3),2) as targetpenanganan,round(sum(b.capaian_5),2) as targetpengurangan
    ,round(sum(((a.capaian_2/a.capaian_1)*100)),2) as capaianpenanganan,round(sum(((a.capaian_4/a.capaian_1)*100)),2) as capaianpengurangan
    from sampah_akses a inner join sampah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$tahun' and a.validasi='1' group by a.tahun_data"; 
    $hasil122 = mysqli_query($koneksi,$sql122);
    $dtjum22=mysqli_num_rows($hasil122);
    if($dtjum22>0){
        $mahasiswa22=mysqli_fetch_array($hasil122);
        $capaianpenanganan=$mahasiswa22['capaianpenanganan'];
        $capaianpengurangan=$mahasiswa22['capaianpengurangan'];
       
        
    }else{

        $capaianpenanganan='0';
        $capaianpengurangan='0';
      

    }

?>